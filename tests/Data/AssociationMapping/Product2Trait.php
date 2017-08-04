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
 * Product2Trait
 *
 */
trait Product2Trait
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Feature", mappedBy="product")
     */
    private $features;

    /**
     * Generated Constructor
     */
    public function generatedConstructor(): void
    {
        $this->features = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add feature
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Feature $feature
     *
     * @return Product2Trait
     */
    public function addFeature(\Xcore\Generator\Tests\Data\AssociationMapping\Feature $feature)
    {
        $this->features[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Feature $feature
     */
    public function removeFeature(\Xcore\Generator\Tests\Data\AssociationMapping\Feature $feature)
    {
        $this->features->removeElement($feature);
    }

    /**
     * Get features
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatures(): \Doctrine\Common\Collections\Collection
    {
        return $this->features;
    }
}

