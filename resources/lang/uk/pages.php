<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Simple Analytics',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Налаштуйте код відстеження Simple Analytics для вашого сайту.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Увімкнути відстеження',
            'helper' => 'Завантажує скрипт Simple Analytics на кожній сторінці. ID не потрібен: візити прив’язуються до сайту за доменом.',
        ],
        'hostname' => [
            'label' => 'Домен',
            'helper' => 'Необов’язково: враховувати візити під цим доменом (наприклад, example.com) замість поточного.',
        ],
    ],
];
