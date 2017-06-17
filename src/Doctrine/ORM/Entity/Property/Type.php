<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Property;

use Doctrine\DBAL\Types\Type as DoctrineType;
use MabeEnum\Enum;

final class Type extends Enum
{
    public const TARRAY = DoctrineType::TARRAY;
    public const SIMPLE_ARRAY = DoctrineType::SIMPLE_ARRAY;
    public const JSON_ARRAY = DoctrineType::JSON_ARRAY;
    public const BIGINT = DoctrineType::BIGINT;
    public const BOOLEAN = DoctrineType::BOOLEAN;
    public const DATETIME = DoctrineType::DATETIME;
    public const DATETIMETZ = DoctrineType::DATETIMETZ;
    public const DATE = DoctrineType::DATE;
    public const TIME = DoctrineType::TIME;
    public const DECIMAL = DoctrineType::DECIMAL;
    public const INTEGER = DoctrineType::INTEGER;
    public const OBJECT = DoctrineType::OBJECT;
    public const SMALLINT = DoctrineType::SMALLINT;
    public const STRING = DoctrineType::STRING;
    public const TEXT = DoctrineType::TEXT;
    public const BINARY = DoctrineType::BINARY;
    public const BLOB = DoctrineType::BLOB;
    public const FLOAT = DoctrineType::FLOAT;
    public const GUID = DoctrineType::GUID;
}