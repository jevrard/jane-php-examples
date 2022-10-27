<?php

namespace Generated\JsonSchema\Normalizer;

use Generated\JsonSchema\Runtime\Normalizer\CheckArray;
use Generated\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SubLevel3Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Generated\\JsonSchema\\Model\\SubLevel3';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof \Generated\JsonSchema\Model\SubLevel3;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Generated\JsonSchema\Model\SubLevel3();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\JsonSchema\Validator\SubLevel3Constraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('end', $data)) {
            $object->setEnd($data['end']);
        }
        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getEnd()) {
            $data['end'] = $object->getEnd();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\JsonSchema\Validator\SubLevel3Constraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}