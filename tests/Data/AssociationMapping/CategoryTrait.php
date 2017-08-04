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
 * CategoryTrait
 *
 */
trait CategoryTrait
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
     * @ORM\OneToMany(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Category", mappedBy="parent")
     */
    private $children;

    /**
     * @var \Xcore\Generator\Tests\Data\AssociationMapping\Category
     *
     * @ORM\ManyToOne(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Category", inversedBy="children")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * Generated Constructor
     */
    public function generatedConstructor(): void
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add child
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Category $child
     *
     * @return CategoryTrait
     */
    public function addChild(\Xcore\Generator\Tests\Data\AssociationMapping\Category $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Category $child
     */
    public function removeChild(\Xcore\Generator\Tests\Data\AssociationMapping\Category $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren(): \Doctrine\Common\Collections\Collection
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Category $parent
     *
     * @return CategoryTrait
     */
    public function setParent(\Xcore\Generator\Tests\Data\AssociationMapping\Category  $parent = null): CategoryTrait
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Xcore\Generator\Tests\Data\AssociationMapping\Category
     */
    public function getParent(): \Xcore\Generator\Tests\Data\AssociationMapping\Category
    {
        return $this->parent;
    }
}

