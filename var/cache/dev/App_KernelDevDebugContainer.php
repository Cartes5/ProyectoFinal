<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4FeMNMc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4FeMNMc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4FeMNMc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4FeMNMc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4FeMNMc\App_KernelDevDebugContainer([
    'container.build_hash' => '4FeMNMc',
    'container.build_id' => 'b2fd6e65',
    'container.build_time' => 1654766349,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4FeMNMc');
