<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\Article;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleTrait
 *
 */
trait ArticleTrait
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
     * @ORM\Column(name="title", type="string", nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="perex", type="string", nullable=true)
     */
    private $perex;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedAt;


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
     * Set title
     *
     * @param string $title
     *
     * @return ArticleTrait
     */
    public function setTitle(string $title): ArticleTrait
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set perex
     *
     * @param null|string $perex
     *
     * @return ArticleTrait
     */
    public function setPerex(?string $perex): ArticleTrait
    {
        $this->perex = $perex;

        return $this;
    }

    /**
     * Get perex
     *
     * @return null|string
     */
    public function getPerex(): ?string
    {
        return $this->perex;
    }

    /**
     * Set text
     *
     * @param null|string $text
     *
     * @return ArticleTrait
     */
    public function setText(?string $text): ArticleTrait
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return null|string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Set active
     *
     * @param bool $active
     *
     * @return ArticleTrait
     */
    public function setActive(bool $active): ArticleTrait
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Set updatedAt
     *
     * @param null|\DateTime $updatedAt
     *
     * @return ArticleTrait
     */
    public function setUpdatedAt(?\DateTime $updatedAt): ArticleTrait
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return null|\DateTime
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
}

