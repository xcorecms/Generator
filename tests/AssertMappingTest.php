<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use PHPUnit\Framework\TestCase;

class AssertMappingTest extends TestCase
{
    public function testNotBlank(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/NotBlank/Content.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/NotBlank/ContentTrait.php', __DIR__.'/ContentTrait.php');
    }

    public function testBlank(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Blank/Content.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Blank/ContentTrait.php', __DIR__.'/ContentTrait.php');
    }

    public function testNotNull(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/NotNull/Content.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/NotNull/ContentTrait.php', __DIR__.'/ContentTrait.php');
    }

    public function testIsNull(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/IsNull/Content.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/IsNull/ContentTrait.php', __DIR__.'/ContentTrait.php');
    }

    public function testIsTrue(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/IsTrue/Content.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/IsTrue/ContentTrait.php', __DIR__.'/ContentTrait.php');
    }

    public function testIsFalse(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/IsFalse/Content.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/IsFalse/ContentTrait.php', __DIR__.'/ContentTrait.php');
    }

    public function testType(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Type/Content.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Type/ContentTrait.php', __DIR__.'/ContentTrait.php');
    }

    public function testEmail(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Email/Content.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Email/ContentTrait.php', __DIR__.'/ContentTrait.php');
    }

    public function testLength(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Length/Participant.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Length/ParticipantTrait.php', __DIR__.'/ParticipantTrait.php');
    }

    public function testUrl(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Url/Author.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Url/AuthorTrait.php', __DIR__.'/AuthorTrait.php');
    }

    public function testRegex(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Regex/Author.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Regex/AuthorTrait.php', __DIR__.'/AuthorTrait.php');
    }

    public function testIp(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Ip/Author.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Ip/AuthorTrait.php', __DIR__.'/AuthorTrait.php');
    }

    public function testUuid(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Uuid/File.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Uuid/FileTrait.php', __DIR__.'/FileTrait.php');
    }

    public function testRange(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Range/Participant.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Range/ParticipantTrait.php', __DIR__.'/ParticipantTrait.php');

        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Range/Event.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Range/EventTrait.php', __DIR__.'/EventTrait.php');
    }

    public function testEqualTo(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/EqualTo/Person.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/EqualTo/PersonTrait.php', __DIR__.'/PersonTrait.php');
    }

    public function testNotEqualTo(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/NotEqualTo/Person.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/NotEqualTo/PersonTrait.php', __DIR__.'/PersonTrait.php');
    }

    public function testIdenticalTo(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/IdenticalTo/Person.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/IdenticalTo/PersonTrait.php', __DIR__.'/PersonTrait.php');
    }

    public function testNotIdenticalTo(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/NotIdenticalTo/Person.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/NotIdenticalTo/PersonTrait.php', __DIR__.'/PersonTrait.php');
    }

    public function testLessThan(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/LessThan/Person.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/LessThan/PersonTrait.php', __DIR__.'/PersonTrait.php');
    }

    public function testLessThanOrEqual(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/LessThanOrEqual/Person.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/LessThanOrEqual/PersonTrait.php', __DIR__.'/PersonTrait.php');
    }

    public function testGreaterThan(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/GreaterThan/Person.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/GreaterThan/PersonTrait.php', __DIR__.'/PersonTrait.php');
    }

    public function testGreaterThanOrEqual(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/GreaterThanOrEqual/Person.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/GreaterThanOrEqual/PersonTrait.php', __DIR__.'/PersonTrait.php');
    }

    public function testDate(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Date/Author.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Date/AuthorTrait.php', __DIR__.'/AuthorTrait.php');
    }

    public function testDateTime(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/DateTime/Author.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/DateTime/AuthorTrait.php', __DIR__.'/AuthorTrait.php');
    }

    public function testTime(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Time/Event.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Time/EventTrait.php', __DIR__.'/EventTrait.php');
    }

    public function testLanguage(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Language/User.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Language/UserTrait.php', __DIR__.'/UserTrait.php');
    }

    public function testLocale(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Locale/User.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Locale/UserTrait.php', __DIR__.'/UserTrait.php');
    }

    public function testCountry(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Country/User.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Country/UserTrait.php', __DIR__.'/UserTrait.php');
    }

    public function testCurrency(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Currency/Order.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Currency/OrderTrait.php', __DIR__.'/OrderTrait.php');
    }

    public function testLuhn(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Luhn/Transaction.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Luhn/TransactionTrait.php', __DIR__.'/TransactionTrait.php');
    }

    public function testIban(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Iban/Transaction.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Iban/TransactionTrait.php', __DIR__.'/TransactionTrait.php');
    }

    public function testBic(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/AssertMapping/Bic/Transaction.orm.json');

        $this->assertFileEquals(__DIR__.'/Data/AssertMapping/Bic/TransactionTrait.php', __DIR__.'/TransactionTrait.php');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        if (file_exists(__DIR__.'/Content.php')) {
            unlink(__DIR__.'/Content.php');
            unlink(__DIR__.'/ContentTrait.php');
        }

        if (file_exists(__DIR__.'/Participant.php')) {
            unlink(__DIR__.'/Participant.php');
            unlink(__DIR__.'/ParticipantTrait.php');
        }

        if (file_exists(__DIR__.'/Author.php')) {
            unlink(__DIR__.'/Author.php');
            unlink(__DIR__.'/AuthorTrait.php');
        }

        if (file_exists(__DIR__.'/File.php')) {
            unlink(__DIR__.'/File.php');
            unlink(__DIR__.'/FileTrait.php');
        }

        if (file_exists(__DIR__.'/Event.php')) {
            unlink(__DIR__.'/Event.php');
            unlink(__DIR__.'/EventTrait.php');
        }

        if (file_exists(__DIR__.'/Person.php')) {
            unlink(__DIR__.'/Person.php');
            unlink(__DIR__.'/PersonTrait.php');
        }

        if (file_exists(__DIR__.'/User.php')) {
            unlink(__DIR__.'/User.php');
            unlink(__DIR__.'/UserTrait.php');
        }

        if (file_exists(__DIR__.'/Order.php')) {
            unlink(__DIR__.'/Order.php');
            unlink(__DIR__.'/OrderTrait.php');
        }

        if (file_exists(__DIR__.'/Transaction.php')) {
            unlink(__DIR__.'/Transaction.php');
            unlink(__DIR__.'/TransactionTrait.php');
        }
    }
}
