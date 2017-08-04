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
 * User5Trait
 *
 */
trait User5Trait
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
     * @ORM\ManyToMany(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\User5", mappedBy="myFriends")
     */
    private $friendsWithMe;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\User5", inversedBy="friendsWithMe")
     * @ORM\JoinTable(name="user5trait_user5",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user5trait_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user5_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $myFriends;

    /**
     * Generated Constructor
     */
    public function generatedConstructor(): void
    {
        $this->friendsWithMe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->myFriends = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add friendsWithMe
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\User5 $friendsWithMe
     *
     * @return User5Trait
     */
    public function addFriendsWithMe(\Xcore\Generator\Tests\Data\AssociationMapping\User5 $friendsWithMe)
    {
        $this->friendsWithMe[] = $friendsWithMe;

        return $this;
    }

    /**
     * Remove friendsWithMe
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\User5 $friendsWithMe
     */
    public function removeFriendsWithMe(\Xcore\Generator\Tests\Data\AssociationMapping\User5 $friendsWithMe)
    {
        $this->friendsWithMe->removeElement($friendsWithMe);
    }

    /**
     * Get friendsWithMe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFriendsWithMe(): \Doctrine\Common\Collections\Collection
    {
        return $this->friendsWithMe;
    }

    /**
     * Add myFriend
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\User5 $myFriend
     *
     * @return User5Trait
     */
    public function addMyFriend(\Xcore\Generator\Tests\Data\AssociationMapping\User5 $myFriend)
    {
        $this->myFriends[] = $myFriend;

        return $this;
    }

    /**
     * Remove myFriend
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\User5 $myFriend
     */
    public function removeMyFriend(\Xcore\Generator\Tests\Data\AssociationMapping\User5 $myFriend)
    {
        $this->myFriends->removeElement($myFriend);
    }

    /**
     * Get myFriends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMyFriends(): \Doctrine\Common\Collections\Collection
    {
        return $this->myFriends;
    }
}

