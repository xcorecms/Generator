<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Time;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EventTrait
 *
 */
trait EventTrait
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
     * @ORM\Column(name="startsAt", type="string", nullable=false)
     * @Assert\Time()
     */
    private $startsAt;


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
     * Set startsAt
     *
     * @param string $startsAt
     */
    public function setStartsAt(string $startsAt): void
    {
        $this->startsAt = $startsAt;
    }

    /**
     * Get startsAt
     *
     * @return string
     */
    public function getStartsAt(): string
    {
        return $this->startsAt;
    }
}

