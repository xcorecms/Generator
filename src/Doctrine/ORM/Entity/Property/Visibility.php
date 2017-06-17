<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

use MabeEnum\Enum;

final class Visibility extends Enum
{
    public const PUBLIC = 'public';
    public const PRIVATE = 'private';
    public const PROTECTED = 'protected';
}