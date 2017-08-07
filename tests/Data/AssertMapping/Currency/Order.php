<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\Currency;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Order
{
    use OrderTrait;

}

