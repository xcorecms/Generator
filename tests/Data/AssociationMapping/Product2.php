<?php

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product2
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product2
{
    use Product2Trait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->generatedConstructor();
    }

}

