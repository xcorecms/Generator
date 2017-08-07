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
                $entityTraitMetadataInfo->setIdGeneratorType($property->getGeneratedValue()->value());

                if ($property->getSequenceGenerator() !== null &&
                    $property->getGeneratedValue()->getValue() === GeneratedValueType::SEQUENCE)
                {
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

                $inversedBy = null;

                if ($association->getInversedBy() !== null) {
                    $inversedBy = $association->getInversedBy();
                }

                $classMetadataBuilder->addManyToOne($association->getName(), $targetEntity, $inversedBy);
            }

            if ($association->getType()->getValue() === AssociationType::ONE_TO_ONE) {
                $targetEntity = $association->getTargetEntity();

                if (strpos($targetEntity, '\\') === false) {
                    $targetEntity = $entity->getNamespace().'\\'.$association->getTargetEntity();
                }

                $inversedBy = null;

                if ($association->getInversedBy() !== null) {
                    $inversedBy = $association->getInversedBy();
                }

                if ($association->getMappedBy() !== null) {
                    $classMetadataBuilder->addInverseOneToOne(
                        $association->getName(),
                        $targetEntity,
                        $association->getMappedBy()
                    );
                } else {
                    $classMetadataBuilder->addOwningOneToOne($association->getName(), $targetEntity, $inversedBy);
                }
            }

            if ($association->getType()->getValue() === AssociationType::ONE_TO_MANY) {
                $targetEntity = $association->getTargetEntity();

                if (strpos($targetEntity, '\\') === false) {
                    $targetEntity = $entity->getNamespace().'\\'.$association->getTargetEntity();
                }

                $classMetadataBuilder->addOneToMany($association->getName(), $targetEntity, (string) $association->getMappedBy());
            }

            if ($association->getType()->getValue() === AssociationType::MANY_TO_MANY) {
                $targetEntity = $association->getTargetEntity();

                if (strpos($targetEntity, '\\') === false) {
                    $targetEntity = $entity->getNamespace().'\\'.$association->getTargetEntity();
                }

                $inversedBy = null;

                if ($association->getInversedBy() !== null) {
                    $inversedBy = $association->getInversedBy();
                }

                if ($association->getMappedBy() !== null) {
                    $classMetadataBuilder->addInverseManyToMany(
                        $association->getName(),
                        $targetEntity,
                        $association->getMappedBy()
                    );
                } else {
                    $classMetadataBuilder->addOwningManyToMany($association->getName(), $targetEntity, $inversedBy);
                }
            }
        }

        $entityTraitGenerator->setGenerateAsserts($entity->getAsserts() !== []);

        $entityTraitGenerator->writeEntityClass($entityTraitMetadataInfo, $entity->getOutputDirectory());

        $entityClassGenerator = new EntityClassGenerator();
        $entityClassGenerator->setGenerateAnnotations(true);
        $entityClassGenerator->generateConstructor($entityTraitGenerator->hasConstructor());

        $entityClassMetadataInfo = new ClassMetadataInfo($entity->getClassName());
        $entityClassGenerator->writeEntityClass($entityClassMetadataInfo, $entity->getOutputDirectory());
    }
}
