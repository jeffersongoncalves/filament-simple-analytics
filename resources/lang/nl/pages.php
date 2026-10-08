<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Instellingen',
    'title' => 'Simple Analytics-instellingen',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Configureer de Simple Analytics-trackingcode voor je site.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Tracking inschakelen',
            'helper' => 'Laadt het Simple Analytics-script op elke pagina. Geen ID nodig: bezoeken worden via het domein aan je site gekoppeld.',
        ],
        'hostname' => [
            'label' => 'Hostnaam',
            'helper' => 'Optioneel: tel de bezoeken onder dit domein (bijv. example.com) in plaats van het huidige.',
        ],
    ],
];
