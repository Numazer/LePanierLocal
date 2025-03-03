<?php

namespace ContainerScsqVv5;

class RequestPayloadValueResolverGhost717f8a5 extends \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'serializer' => [parent::class, 'serializer', parent::class],
        "\0".parent::class."\0".'translationDomain' => [parent::class, 'translationDomain', null],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', parent::class],
        "\0".parent::class."\0".'validator' => [parent::class, 'validator', parent::class],
        'serializer' => [parent::class, 'serializer', parent::class],
        'translationDomain' => [parent::class, 'translationDomain', null],
        'translator' => [parent::class, 'translator', parent::class],
        'validator' => [parent::class, 'validator', parent::class],
    ];
}

class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RequestPayloadValueResolverGhost717f8a5', false)) {
    \class_alias(__NAMESPACE__.'\\RequestPayloadValueResolverGhost717f8a5', 'RequestPayloadValueResolverGhost717f8a5', false);
}
