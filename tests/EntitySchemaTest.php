<?php
declare(strict_types=1);

namespace Xcore\Generator\Tests;

use League\JsonGuard\Validator;
use League\JsonReference\Dereferencer;
use PHPUnit\Framework\TestCase;

final class EntitySchemaTest extends TestCase
{
    public function testEntityJsonSchema(): void
    {
        $data = json_decode(file_get_contents(__DIR__.'/../src/Resources/schema/entity.json'));
        $dereference = Dereferencer::draft6();
        $schema = $dereference->dereference('http://json-schema.org/draft-06/schema#');
        $validator = new Validator($data, $schema);
        $this->assertTrue($validator->passes());
    }
}
