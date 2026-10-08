<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Simple Analytics',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Настройте код отслеживания Simple Analytics для вашего сайта.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Включить отслеживание',
            'helper' => 'Загружает скрипт Simple Analytics на каждой странице. ID не нужен: визиты привязываются к сайту по домену.',
        ],
        'hostname' => [
            'label' => 'Домен',
            'helper' => 'Необязательно: учитывать визиты под этим доменом (например, example.com) вместо текущего.',
        ],
    ],
];
