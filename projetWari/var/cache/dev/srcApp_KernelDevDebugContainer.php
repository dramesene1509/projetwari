<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIxLfGUz\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIxLfGUz/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIxLfGUz.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIxLfGUz\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerIxLfGUz\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'IxLfGUz',
    'container.build_id' => '99658f57',
    'container.build_time' => 1564842632,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIxLfGUz');
