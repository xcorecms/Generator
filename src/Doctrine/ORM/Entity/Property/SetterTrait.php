<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

trait SetterTrait
{
    /**
     * @var bool
     */
    private $setter;

    public function hasSetter(): bool
    {
        return $this->setter;
    }

    public function setSetter(bool $setter): void
    {
        $this->setter = $setter;
    }
}
