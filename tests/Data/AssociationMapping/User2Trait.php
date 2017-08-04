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
 * User2Trait
 *
 */
trait User2Trait
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
     * @ORM\ManyToMany(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\PhoneNumber")
     * @ORM\JoinTable(name="user2trait_phonenumber",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user2trait_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="phonenumber_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $phoneNumbers;

    /**
     * Generated Constructor
     */
    public function generatedConstructor(): void
    {
        $this->phoneNumbers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add phoneNumber
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\PhoneNumber $phoneNumber
     *
     * @return User2Trait
     */
    public function addPhoneNumber(\Xcore\Generator\Tests\Data\AssociationMapping\PhoneNumber $phoneNumber)
    {
        $this->phoneNumbers[] = $phoneNumber;

        return $this;
    }

    /**
     * Remove phoneNumber
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\PhoneNumber $phoneNumber
     */
    public function removePhoneNumber(\Xcore\Generator\Tests\Data\AssociationMapping\PhoneNumber $phoneNumber)
    {
        $this->phoneNumbers->removeElement($phoneNumber);
    }

    /**
     * Get phoneNumbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhoneNumbers(): \Doctrine\Common\Collections\Collection
    {
        return $this->phoneNumbers;
    }
}

