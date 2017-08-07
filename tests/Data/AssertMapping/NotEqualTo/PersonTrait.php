<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\NotEqualTo;

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
     * @ORM\Column(name="firstName", type="string", nullable=false)
     * @Assert\NotEqualTo(value="Mary")
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", nullable=false)
     * @Assert\NotEqualTo(value=15)
     */
    private $age;


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
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
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
}

