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
     * @ORM\Column(name="startDate", type="string", nullable=false)
     * @Assert\Range(min="first day of January", max="first day of January next year")
     */
    private $startDate;


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
     * Set startDate
     *
     * @param string $startDate
     */
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Get startDate
     *
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }
}

