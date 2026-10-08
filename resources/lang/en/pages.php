<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Settings',
    'title' => 'Simple Analytics Settings',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Configure the Simple Analytics tracking code for your site.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Enable tracking',
            'helper' => 'Load the Simple Analytics script on every page. No ID is needed: visits are matched to your site by its domain.',
        ],
        'hostname' => [
            'label' => 'Hostname',
            'helper' => 'Optional: count the visits under this domain (e.g. example.com) instead of the current one.',
        ],
    ],
];
