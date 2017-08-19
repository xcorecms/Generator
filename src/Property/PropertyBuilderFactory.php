<?php
declare(strict_types=1);

namespace Xcore\Generator\Property;

use stdClass;
use Symfony\Component\Finder\SplFileInfo;
use Xcore\Generator\DeclarationInterface;
use Xcore\Generator\Schema;
use Xcore\Generator\Type;
use Xcore\Generator\Util\VisibilityHelper;
use Xcore\Generator\Visibility;

class PropertyBuilderFactory
{
    /**
     * @var Schema
     */
    private $schema;

    public function __construct()
    {
        $this->schema = new Schema(new SplFileInfo(__DIR__ . '/../Resources/schema/property.json', '', ''));
    }

    public function create(DeclarationInterface $declaration): Property
    {
        $data = $declaration->getData();

        return $this->createProperty($data);
    }

    protected function createProperty(stdClass $data): Property
    {
        $property = new Property($data->name);

        $this->setupVisibility($property, Visibility::byValue($data->visibility ?? Visibility::PRIVATE));

        if (isset($data->type)) {
            $this->setupType($property, new Type($data->type), $data->description ?? null);
        }

        return $property;
    }

    protected function setupVisibility(Property $property, Visibility $visibility): void
    {
        VisibilityHelper::makeVisible($property, $visibility);
    }

    protected function setupType(Property $property, Type $type, ?string $description): void
    {
        $property->addVarDocComment($type->getValue(), $description ?? '');
    }

    public function getSchema(): Schema
    {
        return $this->schema;
    }
}
