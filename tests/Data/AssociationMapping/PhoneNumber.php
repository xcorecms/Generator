<?php

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhoneNumber
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PhoneNumber
{
    use PhoneNumberTrait;

}

