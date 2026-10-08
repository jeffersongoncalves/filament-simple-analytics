<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Einstellungen',
    'title' => 'Simple Analytics-Einstellungen',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Konfigurieren Sie den Simple Analytics-Tracking-Code für Ihre Website.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Tracking aktivieren',
            'helper' => 'Lädt das Simple Analytics-Skript auf jeder Seite. Keine ID nötig: Besuche werden Ihrer Website über die Domain zugeordnet.',
        ],
        'hostname' => [
            'label' => 'Hostname',
            'helper' => 'Optional: Besuche unter dieser Domain (z. B. example.com) statt der aktuellen zählen.',
        ],
    ],
];
