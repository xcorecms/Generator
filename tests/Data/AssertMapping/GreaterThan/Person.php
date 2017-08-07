<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\GreaterThan;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Person
{
    use PersonTrait;

}

