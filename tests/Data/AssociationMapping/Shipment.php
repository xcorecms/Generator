<?php

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shipment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Shipment
{
    use ShipmentTrait;

}

