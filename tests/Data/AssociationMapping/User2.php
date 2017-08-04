<?php

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * User2
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User2
{
    use User2Trait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->generatedConstructor();
    }

}

