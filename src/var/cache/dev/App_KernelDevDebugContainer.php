<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGf1t3wW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGf1t3wW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGf1t3wW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGf1t3wW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGf1t3wW\App_KernelDevDebugContainer([
    'container.build_hash' => 'Gf1t3wW',
    'container.build_id' => 'f318519b',
    'container.build_time' => 1666874897,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGf1t3wW');
