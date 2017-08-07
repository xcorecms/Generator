<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\EqualTo;

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

