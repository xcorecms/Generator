<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use PHPUnit\Framework\TestCase;

final class BasicMappingTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/BasicMapping/Message.orm.json');
    }

    public function testMessage(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/BasicMapping/MessageTrait.php', __DIR__.'/MessageTrait.php');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        unlink(__DIR__.'/Message.php');
        unlink(__DIR__.'/MessageTrait.php');
    }
}
