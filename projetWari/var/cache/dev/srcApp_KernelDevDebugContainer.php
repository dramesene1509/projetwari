<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJKwFXay\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJKwFXay/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJKwFXay.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJKwFXay\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJKwFXay\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JKwFXay',
    'container.build_id' => '9d75d222',
    'container.build_time' => 1564826978,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJKwFXay');