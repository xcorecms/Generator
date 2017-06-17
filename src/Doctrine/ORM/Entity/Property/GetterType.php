<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

use MabeEnum\Enum;

final class GetterType extends Enum
{
    public const GET = 'get';
    public const HAS = 'has';
    public const IS = 'is';

    public static function createFromJson(string $value): ?GetterType
    {
        switch ($value) {
            case 'true':
                $getter = self::get(self::GET);
                break;

            case 'false':
                $getter = null;
                break;

            default:
                $getter = self::get($value);
        }

        return $getter;
    }
}
