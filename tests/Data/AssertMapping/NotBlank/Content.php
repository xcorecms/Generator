<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\NotBlank;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Content
{
    use ContentTrait;

}

