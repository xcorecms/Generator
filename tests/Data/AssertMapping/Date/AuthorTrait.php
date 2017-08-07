<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Date;

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
     * @ORM\Column(name="birthday", type="string", nullable=false)
     * @Assert\Date()
     */
    private $birthday;


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
     * Set birthday
     *
     * @param string $birthday
     */
    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * Get birthday
     *
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }
}

