<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\IsTrue;

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
     * @ORM\Column(name="trueProperty", type="string", nullable=false)
     * @Assert\IsTrue()
     */
    private $trueProperty;


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
     * Set trueProperty
     *
     * @param string $trueProperty
     */
    public function setTrueProperty(string $trueProperty): void
    {
        $this->trueProperty = $trueProperty;
    }

    /**
     * Get trueProperty
     *
     * @return string
     */
    public function getTrueProperty(): string
    {
        return $this->trueProperty;
    }
}

