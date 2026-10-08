<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => '設定',
    'title' => 'Simple Analytics 設定',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'サイトの Simple Analytics トラッキングコードを設定します。',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'トラッキングを有効にする',
            'helper' => 'すべてのページで Simple Analytics のスクリプトを読み込みます。ID は不要で、訪問はドメインでサイトに紐付けられます。',
        ],
        'hostname' => [
            'label' => 'ホスト名',
            'helper' => '任意：訪問を現在のドメインではなく、このドメイン（例：example.com）で集計します。',
        ],
    ],
];
