<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use PhpParser\Builder\Method;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt\Return_;
use PHPUnit\Framework\TestCase;
use Xcore\Generator\Method\GetterBuilderFactory;
use Xcore\Generator\Method\MethodBuilderFactory;
use Xcore\Generator\Method\SetterBuilderFactory;
use Xcore\Generator\ScalarType;
use Xcore\Generator\Type;
use Xcore\Generator\Visibility;

final class MethodBuilderFactoryTest extends TestCase
{
    public function testProtectedVisibility()
    {
        $factory = new MethodBuilderFactory();
        $visibility = Visibility::get(Visibility::PROTECTED);
        $property = $factory->create('method', $visibility);

        $this->assertEquals((new Method('method'))->makeProtected(), $property);
    }

    public function testGetter(): void
    {
        $factory = new GetterBuilderFactory();
        $visibility = Visibility::byValue(Visibility::PRIVATE);
        $type = new Type(ScalarType::STRING);
        $getter = $factory->create('name', $visibility, $type);

        $getName = new Method('getName');
        $getName->makePrivate();
        $getName->setReturnType(ScalarType::STRING);
        $getName->addStmt(new Return_(new PropertyFetch(new Variable('this'), 'name')));

        $this->assertEquals($getName, $getter);
    }

    public function testSetter(): void
    {
        $factory = new SetterBuilderFactory();
        $visibility = Visibility::byValue(Visibility::PRIVATE);
        $type = new Type(ScalarType::STRING);
        $setter = $factory->create('name', $visibility, $type);

        $setName = new Method('setName');
        $setName->makePrivate();
        $setName->addParam(new Param('name', null, 'string'));
        $setName->setReturnType('void');
        $setName->addStmt(new Assign(new PropertyFetch(new Variable('this'), 'name'), new Variable('name')));

        $this->assertEquals($setName, $setter);
    }
}
