<?php
declare(strict_types=1);

namespace Xcore\Generator\Property;

use PhpParser\Builder\Property as PhpParserPropertyBuilder;
use Xcore\Generator\ScalarType;

class Property extends PhpParserPropertyBuilder
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->addVarDocComment(ScalarType::STRING, '');
    }

    public function addVarDocComment(string $type, string $description): self
    {
        $docComment = "@var $type $description";

        if (isset($this->attributes['comments'])) {
            $this->attributes = ['comments'];
        }

        $this->attributes['comments']['var'] = $this->normalizeDocComment($docComment);

        return $this;
    }
}
