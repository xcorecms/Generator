<?php

namespace Xcore\Generator\Tests\Data\Article;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Article
{
    use ArticleTrait;

}

