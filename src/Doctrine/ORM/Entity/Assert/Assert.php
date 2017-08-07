<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Assert;

final class Assert
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var null|string
     */
    private $message;

    /**
     * @var null|string
     */
    private $type;

    /**
     * @var null|bool
     */
    private $strict;

    /**
     * @var null|bool
     */
    private $checkHost;

    /**
     * @var null|bool
     */
    private $checkMX;

    /**
     * @var null|int|string
     */
    private $min;

    /**
     * @var null|int|string
     */
    private $max;

    /**
     * @var null|string
     */
    private $charset;

    /**
     * @var null|string
     */
    private $minMessage;

    /**
     * @var null|string
     */
    private $maxMessage;

    /**
     * @var null|string
     */
    private $exactMessage;

    /**
     * @var string[]
     */
    private $protocols = [];

    /**
     * @var null|bool
     */
    private $checkDNS;

    /**
     * @var null|string
     */
    private $dnsMessage;

    /**
     * @var null|string
     */
    private $pattern;

    /**
     * @var null|string|bool
     */
    private $htmlPattern;

    /**
     * @var null|bool
     */
    private $match;

    /**
     * @var null|string
     */
    private $version;

    /**
     * @var null|string
     */
    private $invalidMessage;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @var null|string
     */
    private $format;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getStrict(): ?bool
    {
        return $this->strict;
    }

    public function setStrict(?bool $strict): void
    {
        $this->strict = $strict;
    }

    public function getCheckHost(): ?bool
    {
        return $this->checkHost;
    }

    public function setCheckHost(?bool $checkHost): void
    {
        $this->checkHost = $checkHost;
    }

    public function getCheckMX(): ?bool
    {
        return $this->checkMX;
    }

    public function setCheckMX(?bool $checkMX): void
    {
        $this->checkMX = $checkMX;
    }

    /**
     * @return int|string|null
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param int|string|null $min
     */
    public function setMin($min): void
    {
        $this->min = $min;
    }

    /**
     * @return int|string|null
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param int|string|null $max
     */
    public function setMax($max): void
    {
        $this->max = $max;
    }

    public function getCharset(): ?string
    {
        return $this->charset;
    }

    public function setCharset(?string $charset): void
    {
        $this->charset = $charset;
    }

    public function getMinMessage(): ?string
    {
        return $this->minMessage;
    }

    public function setMinMessage(?string $minMessage): void
    {
        $this->minMessage = $minMessage;
    }

    public function getMaxMessage(): ?string
    {
        return $this->maxMessage;
    }

    public function setMaxMessage(?string $maxMessage): void
    {
        $this->maxMessage = $maxMessage;
    }

    public function getExactMessage(): ?string
    {
        return $this->exactMessage;
    }

    public function setExactMessage(?string $exactMessage): void
    {
        $this->exactMessage = $exactMessage;
    }

    /**
     * @return string[]
     */
    public function getProtocols(): array
    {
        return $this->protocols;
    }

    /**
     * @param string[] $protocols
     */
    public function setProtocols(array $protocols): void
    {
        $this->protocols = $protocols;
    }

    public function getCheckDNS(): ?bool
    {
        return $this->checkDNS;
    }

    public function setCheckDNS(?bool $checkDNS): void
    {
        $this->checkDNS = $checkDNS;
    }

    public function getDnsMessage(): ?string
    {
        return $this->dnsMessage;
    }

    public function setDnsMessage(?string $dnsMessage): void
    {
        $this->dnsMessage = $dnsMessage;
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    public function setPattern(?string $pattern): void
    {
        $this->pattern = $pattern;
    }

    /**
     * @return bool|null|string
     */
    public function getHtmlPattern()
    {
        return $this->htmlPattern;
    }

    /**
     * @param bool|null|string $htmlPattern
     */
    public function setHtmlPattern($htmlPattern): void
    {
        $this->htmlPattern = $htmlPattern;
    }

    public function getMatch(): ?bool
    {
        return $this->match;
    }

    public function setMatch(?bool $match): void
    {
        $this->match = $match;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): void
    {
        $this->version = $version;
    }

    public function getInvalidMessage(): ?string
    {
        return $this->invalidMessage;
    }

    public function setInvalidMessage(?string $invalidMessage): void
    {
        $this->invalidMessage = $invalidMessage;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): void
    {
        $this->format = $format;
    }
}
