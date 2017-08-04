<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\BasicMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageTrait
 *
 */
trait MessageTrait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="message_seq", allocationSize=100, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=140, nullable=false)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="posted_at", type="datetime", nullable=false)
     */
    private $postedAt;


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
     * Set text
     *
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set postedAt
     *
     * @param \DateTime $postedAt
     */
    public function setPostedAt(\DateTime $postedAt): void
    {
        $this->postedAt = $postedAt;
    }

    /**
     * Get postedAt
     *
     * @return \DateTime
     */
    public function getPostedAt(): \DateTime
    {
        return $this->postedAt;
    }
}

