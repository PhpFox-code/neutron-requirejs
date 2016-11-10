<?php

namespace Phpfox\RequireJs;

return [
    'aliases'   => [
        'requireJs' => RequireJs::class,
    ],
    'factories' => [
        RequireJs::class => null,
    ],
    'template'  => [

    ],
    'events'    => [
        'onAssetManagerGetHeader' => RequireJs::class,
        'onAssetManagerGetFooter' => RequireJs::class,
    ],
];