<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKccx8Ey\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKccx8Ey/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKccx8Ey.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKccx8Ey\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKccx8Ey\App_KernelDevDebugContainer([
    'container.build_hash' => 'Kccx8Ey',
    'container.build_id' => '6aa2a836',
    'container.build_time' => 1666788522,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKccx8Ey');
