<?php

namespace Phpfox\RequireJs;

return [
    'services' => [
        'requireJs' => [null, RequireJs::class,],
    ],
    'events'   => [
        'requireJs' => ['onAssetManagerGetHeader', 'onAssetManagerGetFooter'],
    ],
];