<?php

namespace Phpfox\RequireJs;

return [
    'services' => [
        'requireJs' => [null, RequireJs::class,],
    ],
    'events'   => [
        'map' => [
            'onAssetManagerGetHeader' => ['requireJs',],
            'onAssetManagerGetFooter' => ['requireJs',],
        ],
    ],
];