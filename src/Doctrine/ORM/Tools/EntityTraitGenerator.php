<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM\Tools;

use Doctrine\Common\Util\Inflector;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Xcore\Generator\Doctrine\ORM\Entity\Assert\Assert;
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
 */
public function <methodName>(<methodTypeHint> $<variableName><variableDefault>): void
{
<spaces>$this-><fieldName> = $<variableName>;
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
     * @var bool
     */
    private $generateAsserts = false;

    public function getGenerateAsserts(): bool
    {
        return $this->generateAsserts;
    }

    public function setGenerateAsserts(bool $generateAsserts): void
    {
        $this->generateAsserts = $generateAsserts;
    }

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
        return 'trait ' . $this->getClassName($metadata);
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
            $variableType = '@var ' . $this->getType($fieldMapping['type']);
            $code = str_replace($variableType, $variableType . '|null', $code);
        }

        $code = str_replace(['@var boolean', '@var integer'], ['@var bool', '@var int'], $code);
        $lines = [];

        if (!empty($fieldMapping['asserts'])) {
            /** @var Assert $assert */
            foreach ($fieldMapping['asserts'] as $assert) {
                $options = [];

                if ($assert->getMessage() !== null) {
                    $options[] = 'message="'.$assert->getMessage().'"';
                }

                if ($assert->getType() !== null) {
                    $options[] = 'type="'.$assert->getType().'"';
                }

                if ($assert->getStrict() !== null) {
                    $options[] = 'strict='.var_export($assert->getStrict(), true);
                }

                if ($assert->getCheckHost() !== null) {
                    $options[] = 'checkHost='.var_export($assert->getCheckHost(), true);
                }

                if ($assert->getCheckMX() !== null) {
                    $options[] = 'checkMX='.var_export($assert->getCheckMX(), true);
                }

                if ($assert->getMin() !== null) {
                    $options[] = is_string($assert->getMin()) ?
                        'min="'.$assert->getMin().'"' :
                        'min='.$assert->getMin()
                    ;
                }

                if ($assert->getMax() !== null) {
                    $options[] = is_string($assert->getMax()) ?
                        'max="'.$assert->getMax().'"' :
                        'max='.$assert->getMax()
                    ;
                }

                if ($assert->getMinMessage() !== null) {
                    $options[] = 'minMessage="'.$assert->getMinMessage().'"';
                }

                if ($assert->getMaxMessage() !== null) {
                    $options[] = 'maxMessage="'.$assert->getMaxMessage().'"';
                }

                if ($assert->getInvalidMessage() !== null) {
                    $options[] = 'invalidMessage="'.$assert->getInvalidMessage().'"';
                }

                if ($assert->getValue() !== null) {
                    if (is_string($assert->getValue())) {
                        $options[] = 'value="'.$assert->getValue().'"';
                    } elseif (is_bool($assert->getValue())) {
                        $options[] = 'value='.var_export($assert->getValue(), true);
                    } else {
                        $options[] = 'value='.$assert->getValue();
                    }
                }

                if ($assert->getCharset() !== null) {
                    $options[] = 'charset="'.$assert->getCharset().'"';
                }

                if ($assert->getExactMessage() !== null) {
                    $options[] = 'exactMessage="'.$assert->getExactMessage().'"';
                }

                if ($assert->getProtocols() !== []) {
                    $options[] = 'protocols={"'.implode('", "', $assert->getProtocols()).'"}';
                }

                if ($assert->getCheckDNS() !== null) {
                    $options[] = 'checkDNS='.var_export($assert->getCheckDNS(), true);
                }

                if ($assert->getDnsMessage() !== null) {
                    $options[] = 'dnsMessage="'.$assert->getDnsMessage().'"';
                }

                if ($assert->getPattern() !== null) {
                    $options[] = 'pattern="'.$assert->getPattern().'"';
                }

                if ($assert->getHtmlPattern() !== null) {
                    $options[] = is_string($assert->getHtmlPattern()) ?
                        'htmlPattern="'.$assert->getHtmlPattern().'"' :
                        'htmlPattern='.var_export($assert->getHtmlPattern(), true)
                    ;
                }

                if ($assert->getMatch() !== null) {
                    $options[] = 'match='.var_export($assert->getMatch(), true);
                }

                if ($assert->getVersion() !== null) {
                    $options[] = 'version="'.$assert->getVersion().'"';
                }

                if ($assert->getFormat() !== null) {
                    $options[] = 'format="'.$assert->getFormat().'"';
                }

                $lines[] = $this->spaces.' * @Assert\\'.$assert->getName().'('.implode(', ', $options).')';
            }
        }

        $lines[] = $lastLine = $this->spaces . ' */';

        return str_replace($lastLine, implode("\n", $lines), $code);
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

    protected function generateEntityUse(): string
    {
        $code = parent::generateEntityUse();

        if ($this->generateAsserts) {
            $code .= 'use Symfony\Component\Validator\Constraints as Assert;'."\n";
        }

        return $code;
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

                if ($getter !== null) {
                    $code = str_replace('function '.$type, 'function '.$getter->getValue(), $code);
                } else {
                    return '';
                }

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
                    return '';
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
