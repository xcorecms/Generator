<?php

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

trait NullableTrait
{
    /**
     * @var bool
     */
    private $nullable;

    public function isNullable(): bool
    {
        return $this->nullable;
    }

    public function setNullable(bool $nullable): void
    {
        $this->nullable = $nullable;
    }
}