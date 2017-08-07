<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Locale;

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
     * @ORM\Column(name="locale", type="string", nullable=false)
     * @Assert\Locale()
     */
    private $locale;


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
     * Set locale
     *
     * @param string $locale
     */
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }
}

