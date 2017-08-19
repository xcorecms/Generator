<?php
declare(strict_types=1);

namespace Xcore\Generator;

use MabeEnum\Enum;

class ScalarType extends Enum
{
    public const STRING = 'string';
    public const INT = 'int';
    public const FLOAT = 'float';
    public const BOOL = 'bool';
    public const RESOURCE = 'resource';
    public const ARRAY = 'array';
}
