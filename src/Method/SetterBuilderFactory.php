<?php
declare(strict_types=1);

namespace Xcore\Generator\Method;

use PhpParser\Builder\Method;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Param;
use Xcore\Generator\Type;
use Xcore\Generator\Visibility;

class SetterBuilderFactory
{
    public function create(string $name, Visibility $visibility, Type $parameterType): Method
    {
        $factory = new MethodBuilderFactory();
        $method = $factory->create('set'.ucwords($name), $visibility);
        $method->addParam(new Param($name, null, $parameterType->getValue()));

        $this->methodBody($method, $name);

        return $method;
    }

    protected function methodBody(Method $method, string $name): void
    {
        $method->addStmt(new Assign(new PropertyFetch(new Variable('this'), $name), new Variable($name)));
        $method->setReturnType('void');
    }
}
