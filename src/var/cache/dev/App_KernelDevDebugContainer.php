<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYqSfL4r\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYqSfL4r/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYqSfL4r.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYqSfL4r\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYqSfL4r\App_KernelDevDebugContainer([
    'container.build_hash' => 'YqSfL4r',
    'container.build_id' => '7c03e577',
    'container.build_time' => 1666794271,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYqSfL4r');
