<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Simple Analytics',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'اضبط كود تتبع Simple Analytics لموقعك.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'تفعيل التتبع',
            'helper' => 'يحمّل سكربت Simple Analytics في كل صفحة. لا حاجة إلى معرّف: تُربط الزيارات بموقعك عبر النطاق.',
        ],
        'hostname' => [
            'label' => 'اسم النطاق',
            'helper' => 'اختياري: احتساب الزيارات تحت هذا النطاق (مثل example.com) بدلًا من النطاق الحالي.',
        ],
    ],
];
