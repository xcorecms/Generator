<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Range;

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
     * @ORM\Column(name="height", type="string", nullable=false)
     * @Assert\Range(min=120, max=180, minMessage="You must be at least {{ limit }}cm tall to enter", maxMessage="You cannot be taller than {{ limit }}cm to enter")
     */
    private $height;


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
     * Set height
     *
     * @param string $height
     */
    public function setHeight(string $height): void
    {
        $this->height = $height;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }
}

