<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Bic;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TransactionTrait
 *
 */
trait TransactionTrait
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
     * @ORM\Column(name="businessIdentifierCode", type="string", nullable=false)
     * @Assert\Bic()
     */
    private $businessIdentifierCode;


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
     * Set businessIdentifierCode
     *
     * @param string $businessIdentifierCode
     */
    public function setBusinessIdentifierCode(string $businessIdentifierCode): void
    {
        $this->businessIdentifierCode = $businessIdentifierCode;
    }

    /**
     * Get businessIdentifierCode
     *
     * @return string
     */
    public function getBusinessIdentifierCode(): string
    {
        return $this->businessIdentifierCode;
    }
}

