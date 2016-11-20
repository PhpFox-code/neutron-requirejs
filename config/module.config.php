<?php

namespace Phpfox\RequireJs;

return [
    'services' => [
        'requireJs' => [null, RequireJs::class,],
    ],
    'events'   => [
        'listeners' => [
            RequireJs::class => [
                'onAssetManagerGetHeader',
                'onAssetManagerGetFooter',
            ],
        ],
    ],
];