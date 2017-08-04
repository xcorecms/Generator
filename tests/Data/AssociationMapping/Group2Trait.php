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
 * Group2Trait
 *
 */
trait Group2Trait
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
     * @ORM\ManyToMany(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\User4", mappedBy="groups")
     */
    private $users;

    /**
     * Generated Constructor
     */
    public function generatedConstructor(): void
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add user
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\User4 $user
     *
     * @return Group2Trait
     */
    public function addUser(\Xcore\Generator\Tests\Data\AssociationMapping\User4 $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\User4 $user
     */
    public function removeUser(\Xcore\Generator\Tests\Data\AssociationMapping\User4 $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers(): \Doctrine\Common\Collections\Collection
    {
        return $this->users;
    }
}

