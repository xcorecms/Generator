<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\IsNull;

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
     * @ORM\Column(name="nullProperty", type="string", nullable=false)
     * @Assert\IsNull()
     */
    private $nullProperty;


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
     * Set nullProperty
     *
     * @param string $nullProperty
     */
    public function setNullProperty(string $nullProperty): void
    {
        $this->nullProperty = $nullProperty;
    }

    /**
     * Get nullProperty
     *
     * @return string
     */
    public function getNullProperty(): string
    {
        return $this->nullProperty;
    }
}

