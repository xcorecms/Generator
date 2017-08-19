<?php
declare(strict_types=1);

namespace Xcore\Generator\Method;

class IsserBuilderFactory extends GetterBuilderFactory
{
    protected function getPrefix(): string
    {
        return 'is';
    }
}
