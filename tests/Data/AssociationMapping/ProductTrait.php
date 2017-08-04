<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductTrait
 *
 */
trait ProductTrait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \Xcore\Generator\Tests\Data\AssociationMapping\Shipment
     *
     * @ORM\OneToOne(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Shipment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipment_id", referencedColumnName="id", unique=true)
     * })
     */
    private $shipment;


    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set shipment
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Shipment $shipment
     */
    public function setShipment(\Xcore\Generator\Tests\Data\AssociationMapping\Shipment  $shipment = null): void
    {
        $this->shipment = $shipment;
    }

    /**
     * Get shipment
     *
     * @return \Xcore\Generator\Tests\Data\AssociationMapping\Shipment
     */
    public function getShipment(): \Xcore\Generator\Tests\Data\AssociationMapping\Shipment
    {
        return $this->shipment;
    }
}

