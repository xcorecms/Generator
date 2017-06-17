<?php

namespace Xcore\Generator\Tests\Data\BasicMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Message
{
    use MessageTrait;

}

