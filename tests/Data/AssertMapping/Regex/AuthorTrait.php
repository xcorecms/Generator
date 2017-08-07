<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Regex;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AuthorTrait
 *
 */
trait AuthorTrait
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
     * @Assert\Regex(message="Your name cannot contain a number", pattern="/\d/", match=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     * @Assert\Regex(pattern="/^[a-z]+$/i", htmlPattern="^[a-zA-Z]+$")
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

