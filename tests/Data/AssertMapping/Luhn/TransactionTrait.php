<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Luhn;

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
     * @ORM\Column(name="cardNumber", type="string", nullable=false)
     * @Assert\Luhn()
     */
    private $cardNumber;


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
     * Set cardNumber
     *
     * @param string $cardNumber
     */
    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * Get cardNumber
     *
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }
}

