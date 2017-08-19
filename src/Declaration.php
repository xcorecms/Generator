<?php
declare(strict_types=1);

namespace Xcore\Generator;

use InvalidArgumentException;
use League\JsonGuard\Validator;
use League\JsonReference\Dereferencer;
use League\JsonReference\JsonDecoder\JsonDecoder;
use stdClass;
use Symfony\Component\Finder\SplFileInfo;

final class Declaration implements DeclarationInterface
{
    /**
     * @var stdClass
     */
    private $data;

    /**
     * @var Schema
     */
    private $schema;

    public function __construct(SplFileInfo $file, Schema $schema)
    {
        $filename = $file->getFilename();

        if (!$file->isFile()) {
            throw new InvalidArgumentException("File '$filename' isn't valid file");
        }

        $data = (new JsonDecoder())->decode($file->getContents());

        if ($this->isValid($data, $schema)) {
            throw new InvalidArgumentException("File '$filename' isn't valid against the schema");
        }

        $this->schema = $schema;
    }

    private function isValid(stdClass $data, Schema $schema): bool
    {
        $dereference = Dereferencer::draft6();
        $validator = new Validator($data, $dereference->dereference($schema->getPathname()));

        if ($validator->fails()) {
            // TODO: remove
            var_dump($validator->errors());
        }

        return $validator->passes();
    }

    public function getData(): stdClass
    {
        return clone $this->data;
    }
}
