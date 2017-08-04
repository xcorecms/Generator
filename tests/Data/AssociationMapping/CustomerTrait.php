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
 * CustomerTrait
 *
 */
trait CustomerTrait
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
     * @var \Xcore\Generator\Tests\Data\AssociationMapping\Cart
     *
     * @ORM\OneToOne(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Cart", mappedBy="customer")
     */
    private $cart;


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
     * Set cart
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Cart $cart
     */
    public function setCart(\Xcore\Generator\Tests\Data\AssociationMapping\Cart  $cart = null): void
    {
        $this->cart = $cart;
    }

    /**
     * Get cart
     *
     * @return \Xcore\Generator\Tests\Data\AssociationMapping\Cart
     */
    public function getCart(): \Xcore\Generator\Tests\Data\AssociationMapping\Cart
    {
        return $this->cart;
    }
}

