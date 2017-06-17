<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use PHPUnit\Framework\TestCase;

final class GenerateEntityTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/BlankArticle/BlankArticle.orm.json');
    }

    public function testEntity(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/BlankArticle/BlankArticle.php', __DIR__.'/BlankArticle.php');
    }

    public function testTrait(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/BlankArticle/BlankArticleTrait.php', __DIR__ . '/BlankArticleTrait.php');
    }

    /**
     * {@inheritdoc}
     */
    public static function tearDownAfterClass(): void
    {
        unlink(__DIR__.'/BlankArticle.php');
        unlink(__DIR__.'/BlankArticleTrait.php');
    }
}
