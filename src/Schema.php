<?php
declare(strict_types=1);

namespace Xcore\Generator;

use InvalidArgumentException;
use League\JsonGuard\Validator;
use League\JsonReference\Dereferencer;
use League\JsonReference\JsonDecoder\JsonDecoder;
use Symfony\Component\Finder\SplFileInfo;

final class Schema
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var SplFileInfo
     */
    private $file;

    public function __construct(SplFileInfo $file)
    {
        $filename = $file->getFilename();

        if (!$file->isFile()) {
            throw new InvalidArgumentException("File '$filename' isn't valid file");
        }

        $data = (new JsonDecoder())->decode($file->getContents());

        if (null === $data) {
            throw new InvalidArgumentException("File '$filename' doesn't contain valid JSON");
        }

        $dereference = Dereferencer::draft6();
        $validator = new Validator($data, $dereference->dereference('http://json-schema.org/draft-06/schema#'));

        if ($validator->fails()) {
            throw new InvalidArgumentException("Schema '$filename' isn't valid against JSON schema draft 6");
        }

        if (isset($data->title)) {
            $this->name = $data->title;
        }
    }

    public function getName(): string
    {
        if (null !== $this->name) {
            return $this->name;
        }

        return $this->file->getFilename();
    }

    public function getPathname(): string
    {
        return $this->file->getPathname();
    }
}
