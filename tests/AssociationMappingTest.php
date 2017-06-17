<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use PHPUnit\Framework\TestCase;

final class AssociationMappingTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/User.orm.json');
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Address.orm.json');

        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Product.orm.json');
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Shipment.orm.json');
    }

    public function testManyToOneUnidirectional(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/UserTrait.php', __DIR__.'/UserTrait.php');
    }

    public function testOneToOneUnidirectional(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/ProductTrait.php', __DIR__.'/ProductTrait.php');
    }

    /**
     * {@inheritdoc}
     */
    public static function tearDownAfterClass(): void
    {
        unlink(__DIR__.'/User.php');
        unlink(__DIR__.'/UserTrait.php');
        unlink(__DIR__.'/Address.php');
        unlink(__DIR__.'/AddressTrait.php');

        unlink(__DIR__.'/Product.php');
        unlink(__DIR__.'/ProductTrait.php');
        unlink(__DIR__.'/Shipment.php');
        unlink(__DIR__.'/ShipmentTrait.php');
    }
}
