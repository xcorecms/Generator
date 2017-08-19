<?php
declare(strict_types=1);

namespace Xcore\Generator\Method;

class HasserBuilderFactory extends GetterBuilderFactory
{
    protected function getPrefix(): string
    {
        return 'has';
    }
}
