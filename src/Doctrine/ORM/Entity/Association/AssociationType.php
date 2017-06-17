<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Entity\Association;

use MabeEnum\Enum;

final class AssociationType extends Enum
{
    public const MANY_TO_ONE = 'ManyToOne';
    public const ONE_TO_ONE = 'OneToOne';
    public const ONE_TO_MANY = 'OneToMany';
    public const MANY_TO_MANY = 'ManyToMany';
}
