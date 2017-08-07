<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\Country;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
{
    use UserTrait;

}

