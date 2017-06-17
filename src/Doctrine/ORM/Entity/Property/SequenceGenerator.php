<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

class SequenceGenerator
{
    /**
     * @var string
     */
    private $sequenceName;

    /**
     * @var int
     */
    private $initialValue;

    /**
     * @var int
     */
    private $allocationSize;

    public function __construct(string $sequenceName, ?int $initialValue = null, ?int $allocationSize = null)
    {
        $this->sequenceName = $sequenceName;
        $this->initialValue = $initialValue ?? 1;
        $this->allocationSize = $allocationSize ?? 10;
    }

    public function getSequenceName(): string
    {
        return $this->sequenceName;
    }

    public function getInitialValue(): int
    {
        return $this->initialValue;
    }

    public function getAllocationSize(): int
    {
        return $this->allocationSize;
    }
}
