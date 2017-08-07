<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\LessThanOrEqual;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PersonTrait
 *
 */
trait PersonTrait
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
     * @var string
     *
     * @ORM\Column(name="siblings", type="string", nullable=false)
     * @Assert\LessThanOrEqual(value=5)
     */
    private $siblings;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", nullable=false)
     * @Assert\LessThanOrEqual(value=80)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="dateOfBirth", type="string", nullable=false)
     * @Assert\LessThanOrEqual(value="today")
     */
    private $dateOfBirth;


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
     * Set siblings
     *
     * @param string $siblings
     */
    public function setSiblings(string $siblings): void
    {
        $this->siblings = $siblings;
    }

    /**
     * Get siblings
     *
     * @return string
     */
    public function getSiblings(): string
    {
        return $this->siblings;
    }

    /**
     * Set age
     *
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * Set dateOfBirth
     *
     * @param string $dateOfBirth
     */
    public function setDateOfBirth(string $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * Get dateOfBirth
     *
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }
}

