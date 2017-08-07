<?php
declare(strict_types=1);

namespace Xcore\Version\Tests;

use Doctrine\Common\Annotations\AnnotationRegistry;

date_default_timezone_set('Europe/Prague');

$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

