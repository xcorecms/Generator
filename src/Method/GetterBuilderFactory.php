<?php
declare(strict_types=1);

namespace Xcore\Generator\Method;

use PhpParser\Builder\Method;
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\Return_;
use Xcore\Generator\Type;
use Xcore\Generator\Visibility;

class GetterBuilderFactory
{
    public function create(string $name, Visibility $visibility, Type $returnType): Method
    {
        $factory = new MethodBuilderFactory();

        $method = $factory->create($this->getPrefix().ucwords($name), $visibility);
        $method->setReturnType($returnType->getValue());

        $this->methodBody($method, $name);

        return $method;
    }

    protected function methodBody(Method $method, string $name): void
    {
        $variable = new Variable('this');
        $method->addStmt(new Return_(new PropertyFetch($variable, $name)));
    }

    protected function getPrefix(): string
    {
        return 'get';
    }
}
