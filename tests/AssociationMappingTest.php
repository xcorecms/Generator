<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use PHPUnit\Framework\TestCase;

final class AssociationMappingTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass(): void
    {
        /** ManyToOne Unidirectional */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/User.orm.json');
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Address.orm.json');

        /** OneToOne Unidirectional */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Product.orm.json');
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Shipment.orm.json');

        /** OneToOne Bidirectional */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Customer.orm.json');
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Cart.orm.json');

        /** OneToOne Self-referencing */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Student.orm.json');

        /** OneToMany Bidirectional */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Product2.orm.json');
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Feature.orm.json');

        /** OneToMany Unidirectional with Join Table */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/User2.orm.json');
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/PhoneNumber.orm.json');

        /** OneToMany Self-Referencing */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Category.orm.json');

        /** ManyToMany Unidirectional */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/User3.orm.json');
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Group.orm.json');

        /** ManyToMany Bidirectional */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/User4.orm.json');
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/Group2.orm.json');

        /** ManyToMany Self-Referencing */
        JsonEntityGenerator::generate(__DIR__.'/Data/AssociationMapping/User5.orm.json');
    }

    public function testManyToOneUnidirectional(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/UserTrait.php', __DIR__.'/UserTrait.php');
    }

    public function testOneToOneUnidirectional(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/ProductTrait.php', __DIR__.'/ProductTrait.php');
    }

    public function testOneToOneBidirectional(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/CustomerTrait.php', __DIR__.'/CustomerTrait.php');
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/CartTrait.php', __DIR__.'/CartTrait.php');
    }

    public function testOneToOneSelfReferencing(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/StudentTrait.php', __DIR__.'/StudentTrait.php');
    }

    public function testOneToManyBidirectional(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/Product2Trait.php', __DIR__.'/Product2Trait.php');
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/FeatureTrait.php', __DIR__.'/FeatureTrait.php');
    }

    public function testOneToManyUnidirectionalWithJoinTable(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/User2Trait.php', __DIR__.'/User2Trait.php');
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/PhoneNumberTrait.php', __DIR__.'/PhoneNumberTrait.php');
    }

    public function testOneToManySelfReferencing(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/CategoryTrait.php', __DIR__.'/CategoryTrait.php');
    }

    public function testManyToManyUnidirectional(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/User3Trait.php', __DIR__.'/User3Trait.php');
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/GroupTrait.php', __DIR__.'/GroupTrait.php');
    }

    public function testManyToManyBidirectional(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/User4Trait.php', __DIR__.'/User4Trait.php');
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/Group2Trait.php', __DIR__.'/Group2Trait.php');
    }

    public function testManyToManySelfReferencing(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/AssociationMapping/User5Trait.php', __DIR__.'/User5Trait.php');
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

        unlink(__DIR__.'/Customer.php');
        unlink(__DIR__.'/CustomerTrait.php');
        unlink(__DIR__.'/Cart.php');
        unlink(__DIR__.'/CartTrait.php');

        unlink(__DIR__.'/Student.php');
        unlink(__DIR__.'/StudentTrait.php');

        unlink(__DIR__.'/Product2.php');
        unlink(__DIR__.'/Product2Trait.php');
        unlink(__DIR__.'/Feature.php');
        unlink(__DIR__.'/FeatureTrait.php');

        unlink(__DIR__.'/User2.php');
        unlink(__DIR__.'/User2Trait.php');
        unlink(__DIR__.'/PhoneNumber.php');
        unlink(__DIR__.'/PhoneNumberTrait.php');

        unlink(__DIR__.'/Category.php');
        unlink(__DIR__.'/CategoryTrait.php');

        unlink(__DIR__.'/User3.php');
        unlink(__DIR__.'/User3Trait.php');
        unlink(__DIR__.'/Group.php');
        unlink(__DIR__.'/GroupTrait.php');

        unlink(__DIR__.'/User4.php');
        unlink(__DIR__.'/User4Trait.php');
        unlink(__DIR__.'/Group2.php');
        unlink(__DIR__.'/Group2Trait.php');

        unlink(__DIR__.'/User5.php');
        unlink(__DIR__.'/User5Trait.php');
    }
}
