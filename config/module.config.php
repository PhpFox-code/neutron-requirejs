<?php

namespace Phpfox\RequireJs;

return [
    'factories' => [
        'requireJs' => RequireJsFactory::class,
    ],
    'events'    => [
        'onAssetManagerGetHeader' => RequireJs::class,
        'onAssetManagerGetFooter' => RequireJs::class,
    ],
];