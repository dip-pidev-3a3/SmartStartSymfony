<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWwikzch\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWwikzch/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerWwikzch.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerWwikzch\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerWwikzch\appDevDebugProjectContainer([
    'container.build_hash' => 'Wwikzch',
    'container.build_id' => '00ecc384',
    'container.build_time' => 1553729205,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWwikzch');
