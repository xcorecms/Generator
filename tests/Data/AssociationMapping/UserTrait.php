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
 * UserTrait
 *
 */
trait UserTrait
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
     * @var \Xcore\Generator\Tests\Data\AssociationMapping\Address
     *
     * @ORM\ManyToOne(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     * })
     */
    private $address;


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
     * Set address
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Address $address
     *
     * @return UserTrait
     */
    public function setAddress(\Xcore\Generator\Tests\Data\AssociationMapping\Address  $address = null): UserTrait
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Xcore\Generator\Tests\Data\AssociationMapping\Address
     */
    public function getAddress(): \Xcore\Generator\Tests\Data\AssociationMapping\Address
    {
        return $this->address;
    }
}

