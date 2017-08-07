<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Iban;

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
     * @ORM\Column(name="bankAccountNumber", type="string", nullable=false)
     * @Assert\Luhn()
     */
    private $bankAccountNumber;


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
     * Set bankAccountNumber
     *
     * @param string $bankAccountNumber
     */
    public function setBankAccountNumber(string $bankAccountNumber): void
    {
        $this->bankAccountNumber = $bankAccountNumber;
    }

    /**
     * Get bankAccountNumber
     *
     * @return string
     */
    public function getBankAccountNumber(): string
    {
        return $this->bankAccountNumber;
    }
}

