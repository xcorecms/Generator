<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Country;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UserTrait
 *
 */
trait UserTrait
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
     * @ORM\Column(name="country", type="string", nullable=false)
     * @Assert\Country()
     */
    private $country;


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
     * Set country
     *
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
}

