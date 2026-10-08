<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Simple Analytics sozlamalari',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'Saytingiz uchun Simple Analytics kuzatuv kodini sozlang.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'Kuzatuvni yoqish',
            'helper' => 'Simple Analytics skriptini har bir sahifada yuklaydi. ID kerak emas: tashriflar domen orqali saytingizga bog‘lanadi.',
        ],
        'hostname' => [
            'label' => 'Domen',
            'helper' => 'Ixtiyoriy: tashriflarni joriy domen o‘rniga shu domen ostida hisoblaydi (masalan, example.com).',
        ],
    ],
];
