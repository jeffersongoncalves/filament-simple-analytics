<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Simple Analytics',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Skonfiguruj kod śledzenia Simple Analytics dla swojej witryny.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Włącz śledzenie',
            'helper' => 'Ładuje skrypt Simple Analytics na każdej stronie. ID nie jest potrzebne: wizyty są przypisywane do witryny po domenie.',
        ],
        'hostname' => [
            'label' => 'Domena',
            'helper' => 'Opcjonalnie: licz wizyty pod tą domeną (np. example.com) zamiast bieżącej.',
        ],
    ],
];
