<?php

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group2
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Group2
{
    use Group2Trait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->generatedConstructor();
    }

}

