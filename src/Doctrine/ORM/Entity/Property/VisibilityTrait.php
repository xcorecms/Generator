<?php

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

trait VisibilityTrait
{
    /**
     * @var Visibility
     */
    private $visibility;

    public function getVisibility(): Visibility
    {
        return $this->visibility;
    }

    public function setVisibility(Visibility $visibility): void
    {
        $this->visibility = $visibility;
    }
}