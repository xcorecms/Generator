<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\Date;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Author
{
    use AuthorTrait;

}

