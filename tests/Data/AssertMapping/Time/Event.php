<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\Time;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Event
{
    use EventTrait;

}

