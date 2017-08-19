<?php
declare(strict_types=1);

namespace Xcore\Generator\Util;

use InvalidArgumentException;
use PhpParser\Builder\Method;
use Xcore\Generator\Property\Property;
use Xcore\Generator\Visibility;

class VisibilityHelper
{
    /**
     * @param Property|Method $builder
     * @param Visibility $visibility
     *
     * @throws InvalidArgumentException
     */
    public static function makeVisible($builder, Visibility $visibility): void
    {
        if ($builder instanceof Property || $builder instanceof Method) {
            switch ($visibility->getValue()) {
                case Visibility::PUBLIC:
                    $builder->makePublic();
                    break;

                case Visibility::PROTECTED:
                    $builder->makeProtected();
                    break;

                case Visibility::PRIVATE:
                    $builder->makePrivate();
                    break;
            }
        } else {
            throw new InvalidArgumentException('Unsupported builder type');
        }
    }
}
