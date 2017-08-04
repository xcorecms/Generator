<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

final class Property
{
    use VisibilityTrait;
    use GetterTypeTrait;
    use SetterTrait;
    use NullableTrait;

    /**
     * @var string
     */
    private $name;

    /**
     * @var null|string
     */
    private $columnName;

    /**
     * @var null|integer
     */
    private $length;

    /**
     * @var null|Type
     */
    private $type;

    /**
     * @var bool
     */
    private $id = false;

    /**
     * @var null|GeneratedValueType
     */
    private $generatedValue;

    /**
     * @var null|SequenceGenerator
     */
    private $sequenceGenerator;

    public function __construct(
        string $name,
        bool $nullable,
        Visibility $visibility,
        ?GetterType $getter,
        bool $setter
    )
    {
        $this->name = $name;
        $this->nullable = $nullable;
        $this->visibility = $visibility;
        $this->getter = $getter;
        $this->setter = $setter;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColumnName(): ?string
    {
        return $this->columnName;
    }

    public function setColumnName(?string $columnName): void
    {
        $this->columnName = $columnName;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(?int $length): void
    {
        $this->length = $length;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): void
    {
        $this->type = $type;
    }

    public function isNullable(): bool
    {
        return $this->nullable;
    }

    public function setNullable(bool $nullable): void
    {
        $this->nullable = $nullable;
    }

    public function isId(): bool
    {
        return $this->id;
    }

    public function setId(bool $id): void
    {
        if ($id === true && $id !== $this->id) {
            $this->generatedValue = GeneratedValueType::get(GeneratedValueType::AUTO);
        }

        $this->id = $id;
    }

    public function getGeneratedValue(): ?GeneratedValueType
    {
        return $this->generatedValue;
    }

    public function setGeneratedValue(?GeneratedValueType $generatedValue): void
    {
        $this->generatedValue = $generatedValue;
    }

    public function getSequenceGenerator(): ?SequenceGenerator
    {
        return $this->sequenceGenerator;
    }

    public function setSequenceGenerator(?SequenceGenerator $sequenceGenerator): void
    {
        $this->sequenceGenerator = $sequenceGenerator;
    }

    public function getMetadataMapping(): array
    {
        $mapping = [
            'fieldName' => $this->name,
            'nullable' => $this->nullable,
            'getter' => $this->getter,
            'setter' => $this->setter,
            'id' => $this->id,
        ];

        if ($this->type !== null) {
            $mapping['type'] = $this->type->getValue();
        }

        if ($this->columnName !== null) {
            $mapping['columnName'] = $this->columnName;
        }

        if ($this->length !== null) {
            $mapping['length'] = $this->length;
        }

        return $mapping;
    }
}
