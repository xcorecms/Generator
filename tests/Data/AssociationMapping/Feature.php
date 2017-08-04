<?php

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feature
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Feature
{
    use FeatureTrait;

}

