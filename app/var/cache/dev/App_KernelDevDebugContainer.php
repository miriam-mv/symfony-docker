<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZy2ncAe\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZy2ncAe/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZy2ncAe.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZy2ncAe\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZy2ncAe\App_KernelDevDebugContainer([
    'container.build_hash' => 'Zy2ncAe',
    'container.build_id' => '03abbe5f',
    'container.build_time' => 1632154997,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZy2ncAe');