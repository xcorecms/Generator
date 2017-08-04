<?php

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * User4
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User4
{
    use User4Trait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->generatedConstructor();
    }

}

