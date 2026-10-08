<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Parametrlər',
    'title' => 'Simple Analytics parametrləri',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Saytınız üçün Simple Analytics izləmə kodunu konfiqurasiya edin.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'İzləməni aktivləşdir',
            'helper' => 'Simple Analytics skriptini hər səhifədə yükləyir. ID lazım deyil: ziyarətlər domenə görə saytınızla əlaqələndirilir.',
        ],
        'hostname' => [
            'label' => 'Domen',
            'helper' => 'İstəyə bağlı: ziyarətləri cari domen əvəzinə bu domen altında sayır (məs. example.com).',
        ],
    ],
];
