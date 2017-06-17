<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

use Doctrine\ORM\Mapping\ClassMetadataInfo;
use InvalidArgumentException;
use MabeEnum\Enum;

final class GeneratedValueType extends Enum
{
    public const AUTO = ClassMetadataInfo::GENERATOR_TYPE_AUTO;
    public const SEQUENCE = ClassMetadataInfo::GENERATOR_TYPE_SEQUENCE;
    public const IDENTITY = ClassMetadataInfo::GENERATOR_TYPE_IDENTITY;
    public const UUID = ClassMetadataInfo::GENERATOR_TYPE_UUID;
    public const TABLE = ClassMetadataInfo::GENERATOR_TYPE_TABLE;
    public const NONE = ClassMetadataInfo::GENERATOR_TYPE_NONE;
    public const CUSTOM = ClassMetadataInfo::GENERATOR_TYPE_CUSTOM;

    public static function createFromName(string $name): GeneratedValueType
    {
        switch ($name) {
            case 'AUTO':
                return self::get(self::AUTO);
                break;

            case 'SEQUENCE':
                return self::get(self::SEQUENCE);
                break;

            case 'IDENTITY':
                return self::get(self::IDENTITY);
                break;

            case 'UUID':
                return self::get(self::UUID);
                break;

            case 'TABLE':
                return self::get(self::TABLE);
                break;

            case 'NONE':
                return self::get(self::NONE);
                break;

            case 'CUSTOM':
                return self::get(self::CUSTOM);
                break;

            default:
                throw new InvalidArgumentException("Unknow value '$name' for generated value type");
        }
    }
}
