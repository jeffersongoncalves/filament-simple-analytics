<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'Simple Analytics सेटिंग्स',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'अपनी साइट के लिए Simple Analytics ट्रैकिंग कोड कॉन्फ़िगर करें।',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'ट्रैकिंग चालू करें',
            'helper' => 'हर पेज पर Simple Analytics स्क्रिप्ट लोड करता है। किसी ID की ज़रूरत नहीं: विज़िट डोमेन से आपकी साइट से जुड़ती हैं।',
        ],
        'hostname' => [
            'label' => 'होस्टनेम',
            'helper' => 'वैकल्पिक: विज़िट को मौजूदा डोमेन के बजाय इस डोमेन (जैसे example.com) के तहत गिनें।',
        ],
    ],
];
