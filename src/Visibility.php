<?php
declare(strict_types=1);

namespace Xcore\Generator;

use MabeEnum\Enum;

final class Visibility extends Enum
{
    public const PUBLIC = 'public';
    public const PROTECTED = 'protected';
    public const PRIVATE = 'private';
}
