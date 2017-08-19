<?php
declare(strict_types=1);

namespace Xcore\Generator;

use InvalidArgumentException;

class Type
{
    /**
     * @var Type|string
     */
    private $type;

    public function __construct($value)
    {
        if (ScalarType::has($value)) {
            $this->type = ScalarType::byValue($value);
        }

        if (interface_exists($value) || class_exists($value)) {
            $this->type = $value;
        }

        if (null === $this->type) {
            throw new InvalidArgumentException("Type '$value' isn't existing interface or class");
        }
    }

    public function getValue(): string
    {
        if ($this->type instanceof ScalarType) {
            return $this->type->getValue();
        }

        return $this->type;
    }
}
