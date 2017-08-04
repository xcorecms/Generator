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
 * CartTrait
 *
 */
trait CartTrait
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
     * @var \Xcore\Generator\Tests\Data\AssociationMapping\Customer
     *
     * @ORM\OneToOne(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Customer", inversedBy="cart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id", unique=true)
     * })
     */
    private $customer;


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
     * Set customer
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Customer $customer
     *
     * @return CartTrait
     */
    public function setCustomer(\Xcore\Generator\Tests\Data\AssociationMapping\Customer  $customer = null): CartTrait
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Xcore\Generator\Tests\Data\AssociationMapping\Customer
     */
    public function getCustomer(): \Xcore\Generator\Tests\Data\AssociationMapping\Customer
    {
        return $this->customer;
    }
}

