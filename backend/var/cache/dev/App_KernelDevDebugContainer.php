<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFSwLesx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFSwLesx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFSwLesx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFSwLesx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFSwLesx\App_KernelDevDebugContainer([
    'container.build_hash' => 'FSwLesx',
    'container.build_id' => 'aded1916',
    'container.build_time' => 1741108918,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFSwLesx');
