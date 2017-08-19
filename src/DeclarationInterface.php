<?php
declare(strict_types=1);

namespace Xcore\Generator;

use stdClass;

interface DeclarationInterface
{
    public function getData(): stdClass;
}
