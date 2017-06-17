<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\SchemaValidator;
use Doctrine\ORM\Tools\Setup;
use PHPUnit\Framework\TestCase;

final class MetadataTest extends TestCase
{
    public function testMetadata(): void
    {
        $entityFiles = [__DIR__.'/Data'];

        $params = [
            'driver' => 'pdo_sqlite',
            'memory' => true
        ];

        $config = Setup::createAnnotationMetadataConfiguration($entityFiles, false, null, null, false);
        $entityManager = EntityManager::create($params, $config);
        $schemaValidator = new SchemaValidator($entityManager);
        $this->assertEmpty($schemaValidator->validateMapping());
    }
}
