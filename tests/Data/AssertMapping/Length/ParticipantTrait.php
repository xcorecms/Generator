<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Length;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ParticipantTrait
 *
 */
trait ParticipantTrait
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
     * @Assert\Length(min=2, max=50, minMessage="Your first name must be at least {{ limit }} characters long", maxMessage="Your first name cannot be longer than {{ limit }} characters")
     */
    private $firstName;


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
}

