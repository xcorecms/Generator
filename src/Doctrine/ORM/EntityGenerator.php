<?php
declare(strict_types=1);

namespace Xcore\Generator\Doctrine\ORM;

use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Xcore\Generator\Doctrine\ORM\Entity\Association\AssociationType;
use Xcore\Generator\Doctrine\ORM\Entity\Entity;
use Xcore\Generator\Doctrine\ORM\Entity\Property\GeneratedValueType;
use Xcore\Generator\Doctrine\ORM\Entity\Property\GetterType;
use Xcore\Generator\Doctrine\ORM\Entity\Property\Property;
use Xcore\Generator\Doctrine\ORM\Entity\Property\Type;
use Xcore\Generator\Doctrine\ORM\Entity\Property\Visibility;
use Xcore\Generator\Doctrine\ORM\Tools\EntityClassGenerator;
use Xcore\Generator\Doctrine\ORM\Tools\EntityTraitGenerator;

class EntityGenerator
{
    public function generate(Entity ...$entities): void
    {
        foreach ($entities as $entity) {
            $this->generateEntity($entity);
        }
    }

    public function generateEntity(Entity $entity): void
    {
        $entityClassGenerator = new EntityClassGenerator();
        $entityClassGenerator->setGenerateAnnotations(true);

        $entityClassMetadataInfo = new ClassMetadataInfo($entity->getClassName());

        $entityClassGenerator->writeEntityClass($entityClassMetadataInfo, $entity->getOutputDirectory());

        $entityTraitGenerator = new EntityTraitGenerator();
        $entityTraitGenerator->setGenerateAnnotations(true);

        $entityTraitMetadataInfo = new ClassMetadataInfo($entity->getTraitName());

        if ($entity->getIds() === [] && !$entity->hasPropertyWithName('id')) {
            $visibility = Visibility::get(Visibility::PROTECTED);
            $getter = GetterType::get(GetterType::GET);
            $property = new Property('id', false, $visibility, $getter, false);
            $property->setType(Type::get(Type::INTEGER));
            $property->setId(true);

            $entityTraitMetadataInfo->mapField($property->getMetadataMapping());
            $entityTraitMetadataInfo->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);
        }

        foreach ($entity->getProperties() as $property) {
            $entityTraitMetadataInfo->mapField($property->getMetadataMapping());

            if ($property->getGeneratedValue() !== null) {
                $entityTraitMetadataInfo->setIdGeneratorType($property->getGeneratedValue()->getValue());

                if ($property->getGeneratedValue()->getValue() === GeneratedValueType::SEQUENCE) {
                    $sequenceGenerator = $property->getSequenceGenerator();

                    $entityTraitMetadataInfo->setSequenceGeneratorDefinition([
                        'sequenceName' => $sequenceGenerator->getSequenceName(),
                        'initialValue' => $sequenceGenerator->getInitialValue(),
                        'allocationSize' => $sequenceGenerator->getAllocationSize(),
                    ]);
                }
            }
        }

        $classMetadataBuilder = new ClassMetadataBuilder($entityTraitMetadataInfo);

        foreach ($entity->getAssociations() as $association) {
            if ($association->getType()->getValue() === AssociationType::MANY_TO_ONE) {
                $targetEntity = $association->getTargetEntity();

                if (strpos($targetEntity, '\\') === false) {
                    $targetEntity = $entity->getNamespace().'\\'.$association->getTargetEntity();
                }

                $classMetadataBuilder->addManyToOne($association->getName(), $targetEntity);
            }

            if ($association->getType()->getValue() === AssociationType::ONE_TO_ONE) {
                $targetEntity = $association->getTargetEntity();

                if (strpos($targetEntity, '\\') === false) {
                    $targetEntity = $entity->getNamespace().'\\'.$association->getTargetEntity();
                }

                $classMetadataBuilder->addOwningOneToOne($association->getName(), $targetEntity);
            }
        }

        $entityTraitGenerator->writeEntityClass($entityTraitMetadataInfo, $entity->getOutputDirectory());
    }
}