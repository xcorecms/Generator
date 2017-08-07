<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\GreaterThan;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PersonTrait
 *
 */
trait PersonTrait
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
     * @ORM\Column(name="age", type="string", nullable=false)
     * @Assert\GreaterThan(value=18)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="deliveryDate", type="string", nullable=false)
     * @Assert\GreaterThan(value="today")
     */
    private $deliveryDate;


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
     * Set age
     *
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * Set deliveryDate
     *
     * @param string $deliveryDate
     */
    public function setDeliveryDate(string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * Get deliveryDate
     *
     * @return string
     */
    public function getDeliveryDate(): string
    {
        return $this->deliveryDate;
    }
}

