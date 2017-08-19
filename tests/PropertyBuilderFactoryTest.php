<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use DateTime;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_MockObject_MockObject;
use stdClass;
use Xcore\Generator\DeclarationInterface;
use Xcore\Generator\Property\Property;
use Xcore\Generator\Property\PropertyBuilderFactory;
use Xcore\Generator\ScalarType;
use Xcore\Generator\Visibility;

final class PropertyBuilderFactoryTest extends TestCase
{
    /**
     * @var PropertyBuilderFactory
     */
    private $factory;

    protected function setUp()
    {
        $this->factory = new PropertyBuilderFactory();
    }

    public function testBasicProperty(): void
    {
        $declaration = $this->mockDeclaration($this->createPropertyData());

        $property = $this->createProperty();
        $property->makePrivate();

        $this->assertEquals($property, $this->factory->create($declaration));
    }

    public function testPropertyVisibilityProtected(): void
    {
        $propertyData = $this->createPropertyData();
        $propertyData->visibility = Visibility::PROTECTED;

        $declaration = $this->mockDeclaration($propertyData);

        $property = $this->createProperty();
        $property->makeProtected();

        $this->assertEquals($property, $this->factory->create($declaration));
    }

    public function testPropertyVisibilityPublic(): void
    {
        $propertyData = $this->createPropertyData();
        $propertyData->visibility = Visibility::PUBLIC;

        $declaration = $this->mockDeclaration($propertyData);

        $property = $this->createProperty();
        $property->makePublic();

        $this->assertEquals($property, $this->factory->create($declaration));
    }

    public function testIntProperty()
    {
        $propertyData = $this->createPropertyData('age');
        $propertyData->type = ScalarType::INT;

        $declaration = $this->mockDeclaration($propertyData);

        $property = $this->createProperty('age');
        $property->makePrivate();
        $property->addVarDocComment(ScalarType::INT, '');

        $this->assertEquals($property, $this->factory->create($declaration));
    }

    public function testDateProperty()
    {
        $propertyData = $this->createPropertyData('date');
        $propertyData->type = DateTime::class;

        $declaration = $this->mockDeclaration($propertyData);

        $property = $this->createProperty('date');
        $property->makePrivate();
        $property->addVarDocComment(DateTime::class, '');

        $this->assertEquals($property, $this->factory->create($declaration));
    }

    private function createPropertyData($name = 'name'): stdClass
    {
        $propertyData = new stdClass();
        $propertyData->name = $name;

        return $propertyData;
    }

    private function createProperty($name = 'name'): Property
    {
        return new Property($name);
    }

    /**
     * @param stdClass $data
     *
     * @return DeclarationInterface|PHPUnit_Framework_MockObject_MockObject
     */
    private function mockDeclaration(stdClass $data): DeclarationInterface
    {
        $declaration = $this->createMock(DeclarationInterface::class);

        $declaration
            ->method('getData')
            ->willReturn($data);

        return $declaration;
    }
}
