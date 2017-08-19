<?php
declare(strict_types=1);

namespace Xcore\Generator\Method;

use PhpParser\Builder\Method;
use Xcore\Generator\Util\VisibilityHelper;
use Xcore\Generator\Visibility;

class MethodBuilderFactory
{
    public function create(string $name, Visibility $visibility): Method
    {
        $method = new Method($name);

        VisibilityHelper::makeVisible($method, $visibility);

        return $method;
    }
}
