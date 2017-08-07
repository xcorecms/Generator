<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Url;

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
     * @ORM\Column(name="bioUrl", type="string", nullable=false)
     * @Assert\Url(message="The url '{{ value }}' is not a valid url", protocols={"http", "https", "ftp"}, checkDNS=true, dnsMessage="The host '{{ value }}' could not be resolved.")
     */
    private $bioUrl;


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
     * Set bioUrl
     *
     * @param string $bioUrl
     */
    public function setBioUrl(string $bioUrl): void
    {
        $this->bioUrl = $bioUrl;
    }

    /**
     * Get bioUrl
     *
     * @return string
     */
    public function getBioUrl(): string
    {
        return $this->bioUrl;
    }
}

