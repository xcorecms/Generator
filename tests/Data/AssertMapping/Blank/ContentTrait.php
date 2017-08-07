<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Blank;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ContentTrait
 *
 */
trait ContentTrait
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
     * @ORM\Column(name="blankProperty", type="string", nullable=false)
     * @Assert\Blank()
     */
    private $blankProperty;


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
     * Set blankProperty
     *
     * @param string $blankProperty
     */
    public function setBlankProperty(string $blankProperty): void
    {
        $this->blankProperty = $blankProperty;
    }

    /**
     * Get blankProperty
     *
     * @return string
     */
    public function getBlankProperty(): string
    {
        return $this->blankProperty;
    }
}

