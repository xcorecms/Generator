<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssertMapping\Type;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ContentTrait
 *
 */
trait ContentTrait
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
     * @ORM\Column(name="godlikeProperty", type="string", nullable=false)
     * @Assert\Type(type="array")
     * @Assert\Type(type="bool")
     * @Assert\Type(type="callable")
     * @Assert\Type(type="float")
     * @Assert\Type(type="double")
     * @Assert\Type(type="int")
     * @Assert\Type(type="integer")
     * @Assert\Type(type="long")
     * @Assert\Type(type="null")
     * @Assert\Type(type="numeric")
     * @Assert\Type(type="object")
     * @Assert\Type(type="real")
     * @Assert\Type(type="resource")
     * @Assert\Type(type="scalar")
     * @Assert\Type(type="string")
     * @Assert\Type(type="alnum")
     * @Assert\Type(type="alpha")
     * @Assert\Type(type="cntrl")
     * @Assert\Type(type="digit")
     * @Assert\Type(type="graph")
     * @Assert\Type(type="lower")
     * @Assert\Type(type="print")
     * @Assert\Type(type="punct")
     * @Assert\Type(type="space")
     * @Assert\Type(type="upper")
     * @Assert\Type(type="xdigit")
     */
    private $godlikeProperty;


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
     * Set godlikeProperty
     *
     * @param string $godlikeProperty
     */
    public function setGodlikeProperty(string $godlikeProperty): void
    {
        $this->godlikeProperty = $godlikeProperty;
    }

    /**
     * Get godlikeProperty
     *
     * @return string
     */
    public function getGodlikeProperty(): string
    {
        return $this->godlikeProperty;
    }
}

