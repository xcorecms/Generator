<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Association;

final class Association
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var AssociationType
     */
    private $type;

    /**
     * @var string
     */
    private $targetEntity;

    /**
     * @var null|string
     */
    private $mappedBy;

    /**
     * @var null|string
     */
    private $inversedBy;

    /**
     * @var null|JoinColumn
     */
    private $joinColumn;

    public function __construct(string $name, AssociationType $type, string $targetEntity)
    {
        $this->name = $name;
        $this->type = $type;
        $this->targetEntity = $targetEntity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): AssociationType
    {
        return $this->type;
    }

    public function setType(AssociationType $type): void
    {
        $this->type = $type;
    }

    public function getTargetEntity(): string
    {
        return $this->targetEntity;
    }

    public function setTargetEntity(string $targetEntity): void
    {
        $this->targetEntity = $targetEntity;
    }

    public function getMappedBy(): ?string
    {
        return $this->mappedBy;
    }

    public function setMappedBy(?string $mappedBy): void
    {
        $this->mappedBy = $mappedBy;
    }

    public function getInversedBy(): ?string
    {
        return $this->inversedBy;
    }

    public function setInversedBy(?string $inversedBy): void
    {
        $this->inversedBy = $inversedBy;
    }

    public function getJoinColumn(): ?JoinColumn
    {
        return $this->joinColumn;
    }

    public function setJoinColumn(?JoinColumn $joinColumn): void
    {
        $this->joinColumn = $joinColumn;
    }

    public function getMetadataMapping(): array
    {
        return [
            'fieldName' => $this->name,
            'targetEntity' => $this->targetEntity,
        ];
    }
}
