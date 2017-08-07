<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\NotNull;

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
     * @ORM\Column(name="notNullProperty", type="string", nullable=false)
     * @Assert\NotNull()
     */
    private $notNullProperty;


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
     * Set notNullProperty
     *
     * @param string $notNullProperty
     */
    public function setNotNullProperty(string $notNullProperty): void
    {
        $this->notNullProperty = $notNullProperty;
    }

    /**
     * Get notNullProperty
     *
     * @return string
     */
    public function getNotNullProperty(): string
    {
        return $this->notNullProperty;
    }
}

