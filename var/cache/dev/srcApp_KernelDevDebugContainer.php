<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLijBuxV\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLijBuxV/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLijBuxV.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLijBuxV\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerLijBuxV\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'LijBuxV',
    'container.build_id' => '20cddb4a',
    'container.build_time' => 1561548300,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLijBuxV');
