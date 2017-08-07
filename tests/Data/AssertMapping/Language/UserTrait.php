<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Language;

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
     * @ORM\Column(name="preferredLanguage", type="string", nullable=false)
     * @Assert\Language()
     */
    private $preferredLanguage;


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
     * Set preferredLanguage
     *
     * @param string $preferredLanguage
     */
    public function setPreferredLanguage(string $preferredLanguage): void
    {
        $this->preferredLanguage = $preferredLanguage;
    }

    /**
     * Get preferredLanguage
     *
     * @return string
     */
    public function getPreferredLanguage(): string
    {
        return $this->preferredLanguage;
    }
}

