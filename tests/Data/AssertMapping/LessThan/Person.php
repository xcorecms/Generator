<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\LessThan;

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

