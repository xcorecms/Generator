<?php

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Category
{
    use CategoryTrait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->generatedConstructor();
    }

}

