<?php

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * User3
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User3
{
    use User3Trait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->generatedConstructor();
    }

}

