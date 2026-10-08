<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Ayarlar',
    'title' => 'Simple Analytics ayarları',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Siteniz için Simple Analytics izleme kodunu yapılandırın.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'İzlemeyi etkinleştir',
            'helper' => 'Simple Analytics betiğini her sayfada yükler. Kimlik gerekmez: ziyaretler alan adına göre sitenizle eşleştirilir.',
        ],
        'hostname' => [
            'label' => 'Alan adı',
            'helper' => 'İsteğe bağlı: ziyaretleri mevcut alan adı yerine bu alan adı altında sayar (örn. example.com).',
        ],
    ],
];
