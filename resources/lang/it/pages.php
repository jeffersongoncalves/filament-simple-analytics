<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Simple Analytics',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Configura il codice di tracciamento Simple Analytics del tuo sito.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Attiva il tracciamento',
            'helper' => 'Carica lo script di Simple Analytics in ogni pagina. Non serve un ID: le visite sono associate al tuo sito tramite il dominio.',
        ],
        'hostname' => [
            'label' => 'Dominio',
            'helper' => 'Facoltativo: conta le visite con questo dominio (es. example.com) invece di quello attuale.',
        ],
    ],
];
