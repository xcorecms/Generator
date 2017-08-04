<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Tools;

use Doctrine\Common\Util\Inflector;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Xcore\Generator\Doctrine\ORM\Entity\Property\GetterType;

class EntityTraitGenerator extends EntityGenerator
{
    /**
     * @var string
     */
    protected static $classTemplate =
        '<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

<namespace>
<useStatement>
<entityAnnotation>
<entityClassName>
{
<entityBody>
}
';

    /**
     * @var string
     */
    protected static $getMethodTemplate =
        '/**
 * <description>
 *
 * @return <variableType>
 */
public function <methodName>(): <variableType>
{
<spaces>return $this-><fieldName>;
}';

    /**
     * @var string
     */
    protected static $setMethodTemplate =
        '/**
 * <description>
 *
 * @param <variableType> $<variableName>
 *
 * @return <entity>
 */
public function <methodName>(<methodTypeHint> $<variableName><variableDefault>): <entity>
{
<spaces>$this-><fieldName> = $<variableName>;

<spaces>return $this;
}';

    /**
     * @var string
     */
    protected static $constructorMethodTemplate =
        '/**
 * Generated Constructor
 */
public function generatedConstructor(): void
{
<spaces><collections>
}
';

    /**
     * @var bool
     */
    private $hasConstructor = false;

    /**
     * {@inheritdoc}
     */
    protected function generateEntityAnnotation(ClassMetadataInfo $metadata): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    protected function generateTableAnnotation($metadata): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    protected function generateEntityClassName(ClassMetadataInfo $metadata): string
    {
        return 'trait '.$this->getClassName($metadata);
    }

    /**
     * {@inheritdoc}
     */
    protected function generateEntityBody(ClassMetadataInfo $metadata): string
    {
        // Always generate stub methods and disable generating on method level
        $this->generateEntityStubMethods = true;

        return parent::generateEntityBody($metadata);
    }

    /**
     * {@inheritdoc}
     */
    public function generateUpdatedEntityClass(ClassMetadataInfo $metadata, $path): string
    {
        return $this->generateEntityClass($metadata);
    }

    /**
     * {@inheritdoc}
     */
    public function writeEntityClass(ClassMetadataInfo $metadata, $outputDirectory): void
    {
        // Always update existing entities
        $this->updateEntityIfExists = true;

        parent::writeEntityClass($metadata, $outputDirectory);
    }

    /**
     * {@inheritdoc}
     */
    protected function generateFieldMappingPropertyDocBlock(array $fieldMapping, ClassMetadataInfo $metadata): string
    {
        $code = parent::generateFieldMappingPropertyDocBlock($fieldMapping, $metadata);

        // If type is nullable add |null prefix to variable type
        if ($fieldMapping['nullable'] === true) {
            $variableType = '@var '.$this->getType($fieldMapping['type']);
            $code = str_replace($variableType, $variableType.'|null', $code);
        }

        $code = str_replace(['@var boolean', '@var integer'], ['@var bool', '@var int'], $code);

        return $code;
    }

    /**
     * {@inheritdoc}
     */
    public function generateEntityConstructor(ClassMetadataInfo $metadata): string
    {
        $code = parent::generateEntityConstructor($metadata);

        if ($code !== '') {
            $this->hasConstructor = true;
        }

        return $code;
    }

    public function hasConstructor(): bool
    {
        return $this->hasConstructor;
    }

    /**
     * {@inheritdoc}
     */
    protected function generateEntityStubMethod(ClassMetadataInfo $metadata, $type, $fieldName, $typeHint = null, $defaultValue = null): string
    {
        $code = parent::generateEntityStubMethod($metadata, $type, $fieldName, $typeHint, $defaultValue);

        if ($type === GetterType::GET) {
            if ($metadata->hasField($fieldName)) {
                $fieldMapping = $metadata->getFieldMapping($fieldName);

                /** @var null|GetterType $getter */
                $getter = $fieldMapping['getter'];
                $code = str_replace('function '.$type, 'function '.$getter->getValue(), $code);

                if ($fieldMapping['nullable'] === true) {
                    $variableType = $this->getType($typeHint);
                    $code = str_replace(
                        ["@return $variableType", ": $variableType"],
                        ["@return null|$variableType", ": ?$variableType"],
                        $code
                    );
                }
            }
        } elseif ($type === 'set') {
            if ($metadata->hasField($fieldName)) {
                $fieldMapping = $metadata->getFieldMapping($fieldName);

                /** @var bool $setter */
                $setter = $fieldMapping['setter'];

                if ($setter === false) {
                    $code = '';
                }

                $variableName = Inflector::camelize($fieldName);
                $types = Type::getTypesMap();

                if (isset($types[$typeHint])) {
                    $variableType = $this->getType($typeHint);
                    $nullableType = '';

                    if ($fieldMapping['nullable'] === true) {
                        $nullableType = '?';
                        $code = str_replace("@param $variableType", "@param null|$variableType", $code);
                    }

                    $code = str_replace(
                        "( $$variableName)",
                        "({$nullableType}{$variableType} $$variableName)",
                        $code
                    );
                }
            }
        }

        $code = str_replace(['boolean', 'integer'], ['bool', 'int'], $code);

        return $code;
    }
}
