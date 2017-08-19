<?php
declare(strict_types=1);

namespace Xcore\Generator\ClassLike;

use Symfony\Component\Finder\SplFileInfo;
use Xcore\Generator\Schema;

abstract class ClassLikeBuilderFactory
{
    /**
     * @var Schema
     */
    private $schema;

    public function __construct()
    {
        $this->schema = new Schema(new SplFileInfo(__DIR__ . '/../Resources/schema/class.json', '', ''));
    }

    public function getSchema(): Schema
    {
        return $this->schema;
    }
}
