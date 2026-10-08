<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Configurações',
    'title' => 'Configurações do Simple Analytics',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Configure o código de rastreamento do Simple Analytics do seu site.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Ativar rastreamento',
            'helper' => 'Carrega o script do Simple Analytics em todas as páginas. Não precisa de ID: as visitas são associadas ao seu site pelo domínio.',
        ],
        'hostname' => [
            'label' => 'Domínio',
            'helper' => 'Opcional: contabiliza as visitas neste domínio (ex.: example.com) em vez do atual.',
        ],
    ],
];
