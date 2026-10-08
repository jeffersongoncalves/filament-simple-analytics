<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Simple Analytics',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Configurez le code de suivi Simple Analytics de votre site.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Activer le suivi',
            'helper' => 'Charge le script Simple Analytics sur chaque page. Aucun ID n\'est nécessaire : les visites sont associées à votre site par son domaine.',
        ],
        'hostname' => [
            'label' => 'Nom d\'hôte',
            'helper' => 'Facultatif : comptabilise les visites sous ce domaine (ex. : example.com) au lieu du domaine actuel.',
        ],
    ],
];
