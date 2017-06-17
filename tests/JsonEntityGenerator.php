<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use Xcore\Generator\Doctrine\ORM\Entity\EntityFactory;
use Xcore\Generator\Doctrine\ORM\EntityGenerator;

final class JsonEntityGenerator
{
    public static function generate(string ...$jsonEntityFile): void
    {
        $factory = new EntityFactory();

        foreach ($jsonEntityFile as $entityFile) {
            $json = file_get_contents($entityFile);

            $entity = $factory->createFromJson($json);
            $namespace = str_replace([__DIR__, '/'], ['', '\\'], pathinfo($entityFile)['dirname']);
            $entity->setNamespace('Xcore\\Generator\\Tests'.$namespace);
            $entity->setOutputDirectory(__DIR__);

            $entityGenerator = new EntityGenerator();
            $entityGenerator->generate($entity);
        }
    }
}
