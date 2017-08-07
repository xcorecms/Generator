<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\IsFalse;

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
     * @ORM\Column(name="falseProperty", type="string", nullable=false)
     * @Assert\IsFalse()
     */
    private $falseProperty;


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
     * Set falseProperty
     *
     * @param string $falseProperty
     */
    public function setFalseProperty(string $falseProperty): void
    {
        $this->falseProperty = $falseProperty;
    }

    /**
     * Get falseProperty
     *
     * @return string
     */
    public function getFalseProperty(): string
    {
        return $this->falseProperty;
    }
}

