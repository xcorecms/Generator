<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use PHPUnit\Framework\TestCase;

final class PropertyTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        JsonEntityGenerator::generate(__DIR__.'/Data/Article/Article.orm.json');
    }

    public function testTrait(): void
    {
        $this->assertFileEquals(__DIR__.'/Data/Article/ArticleTrait.php', __DIR__.'/ArticleTrait.php');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        unlink(__DIR__.'/Article.php');
        unlink(__DIR__.'/ArticleTrait.php');
    }
}
