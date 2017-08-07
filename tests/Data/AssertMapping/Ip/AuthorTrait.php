<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Ip;

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
     * @ORM\Column(name="ipAddress", type="string", nullable=false)
     * @Assert\Ip(version="all")
     */
    private $ipAddress;


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
     * Set ipAddress
     *
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
}

