<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Simple Analytics',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Configura el código de seguimiento de Simple Analytics de tu sitio.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Activar el seguimiento',
            'helper' => 'Carga el script de Simple Analytics en todas las páginas. No necesita ID: las visitas se asocian a tu sitio por su dominio.',
        ],
        'hostname' => [
            'label' => 'Dominio',
            'helper' => 'Opcional: cuenta las visitas en este dominio (p. ej., example.com) en lugar del actual.',
        ],
    ],
];
