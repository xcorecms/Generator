<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Tools;

use Doctrine\ORM\Mapping\ClassMetadataInfo;

class EntityClassGenerator extends EntityGenerator
{
    /**
     * @var string
     */
    protected static $constructorMethodTemplate =
        '
<spaces>/**
<spaces> * Constructor
<spaces> */
<spaces>public function __construct()
<spaces>{
<spaces><spaces>$this->generatedConstructor();
<spaces>}
';

    /**
     * @var bool
     */
    private $generateConstructor = false;

    protected function generateEntityDocBlock(ClassMetadataInfo $metadata): string
    {
        $code = parent::generateEntityDocBlock($metadata);

        return str_replace([' * '.$this->getClassName($metadata)."\n", " *\n"], '', $code);
    }

    protected function generateEntityBody(ClassMetadataInfo $metadata): string
    {
        $code = [];
        $code[] = "{$this->spaces}use {$this->getClassName($metadata)}Trait;";
        $code[] = parent::generateEntityBody($metadata);

        return implode("\n", $code);
    }

    public function generateConstructor(bool $generateConstructor)
    {
        $this->generateConstructor = $generateConstructor;
    }

    /**
     * @return bool
     */
    public function isConstructor(): bool
    {
        return $this->generateConstructor;
    }

    protected function generateEntityConstructor(ClassMetadataInfo $metadata)
    {
        if ($this->generateConstructor) {
            return static::$constructorMethodTemplate;
        }

        return '';
    }
}
