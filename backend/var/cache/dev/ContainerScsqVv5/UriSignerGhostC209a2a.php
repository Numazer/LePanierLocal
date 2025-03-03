<?php

namespace ContainerScsqVv5;

class UriSignerGhostC209a2a extends \Symfony\Component\HttpFoundation\UriSigner implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'expirationParameter' => [parent::class, 'expirationParameter', null],
        "\0".parent::class."\0".'hashParameter' => [parent::class, 'hashParameter', null],
        "\0".parent::class."\0".'secret' => [parent::class, 'secret', null],
        'expirationParameter' => [parent::class, 'expirationParameter', null],
        'hashParameter' => [parent::class, 'hashParameter', null],
        'secret' => [parent::class, 'secret', null],
    ];
}

class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('UriSignerGhostC209a2a', false)) {
    \class_alias(__NAMESPACE__.'\\UriSignerGhostC209a2a', 'UriSignerGhostC209a2a', false);
}
