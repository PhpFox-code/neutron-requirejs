<?php

namespace Phpfox\RequireJs;

return [
    'services' => [
        'requireJs' => RequireJs::class,
    ],
    'events'   => [
        'onAssetManagerGetHeader' => RequireJs::class,
        'onAssetManagerGetFooter' => RequireJs::class,
    ],
];