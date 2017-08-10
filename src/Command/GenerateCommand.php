<?php
declare(strict_types=1);

namespace Xcore\Generator\Command;

use League\JsonGuard\Validator;
use League\JsonReference\Dereferencer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\LogicException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Xcore\Generator\Doctrine\ORM\Entity\EntityFactory;
use Xcore\Generator\Doctrine\ORM\EntityGenerator;

class GenerateCommand extends Command
{
    private const NAME = 'generate';

    private const CONFIG = 'config';

    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        $this
            ->setName(self::NAME)
            ->setDescription('Generate source code from your definitions.')
            ->addOption('config', 'c', InputOption::VALUE_REQUIRED)
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $dereference = Dereferencer::draft4();
        $schema = $dereference->dereference('file://'.__DIR__. '/../Resources/schema/generator.json');
        $generatorSetup = getcwd().'/generator.json';

        if (null !== $input->getOption(self::CONFIG)) {
            $generatorSetup = $input->getOption(self::CONFIG);
        }

        if (!is_file($generatorSetup)) {
            throw new LogicException('Cannot find generator.json file.');
        }

        $data = json_decode(file_get_contents($generatorSetup));
        $validator = new Validator($data, $schema);

        if ($validator->fails()) {
            throw new LogicException('Invalid generator.json file format.');
        }

        $dir = pathinfo($generatorSetup)['dirname'];

        $factory = new EntityFactory();

        foreach ($data->entities as $namespace => $directory) {
            $directory = "$dir/$directory";

            $finder = new Finder();
            $finder->name('*.orm.json');
            $finder->in($directory);

            if (is_dir($directory)) {
                /** @var SplFileInfo $file */
                foreach ($finder as $file) {
                    $namespace .= str_replace([$directory, '/'], ['', '\\'], $file->getPath());
                    $content = $file->getContents();

                    $entity = $factory->createFromJson($content);
                    $entity->setNamespace($namespace);
                    $entity->setOutputDirectory($file->getPath());

                    $entityGenerator = new EntityGenerator();
                    $entityGenerator->generate($entity);
                }
            }
        }
    }
}
