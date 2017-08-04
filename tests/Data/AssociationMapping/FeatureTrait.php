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
 * FeatureTrait
 *
 */
trait FeatureTrait
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
     * @var \Xcore\Generator\Tests\Data\AssociationMapping\Product2
     *
     * @ORM\ManyToOne(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Product2", inversedBy="features")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;


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
     * Set product
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Product2 $product
     *
     * @return FeatureTrait
     */
    public function setProduct(\Xcore\Generator\Tests\Data\AssociationMapping\Product2  $product = null): FeatureTrait
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Xcore\Generator\Tests\Data\AssociationMapping\Product2
     */
    public function getProduct(): \Xcore\Generator\Tests\Data\AssociationMapping\Product2
    {
        return $this->product;
    }
}

