<?php

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

trait GetterTypeTrait
{
    /**
     * @var null|GetterType
     */
    private $getter;

    public function getGetter(): ?GetterType
    {
        return $this->getter;
    }

    public function setGetter(?GetterType $getter): void
    {
        $this->getter = $getter;
    }
}