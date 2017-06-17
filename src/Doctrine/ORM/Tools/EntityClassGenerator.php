<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Tools;

use Doctrine\ORM\Mapping\ClassMetadataInfo;

class EntityClassGenerator extends EntityGenerator
{
    protected function generateEntityBody(ClassMetadataInfo $metadata): string
    {
        $code = [];
        $code[] = "{$this->spaces}use {$this->getClassName($metadata)}Trait;";
        $code[] = parent::generateEntityBody($metadata);

        return implode("\n", $code);
    }
}