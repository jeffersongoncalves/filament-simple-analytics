<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات Simple Analytics',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => 'کد ردیابی Simple Analytics را برای سایت خود پیکربندی کنید.',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => 'فعال‌سازی ردیابی',
            'helper' => 'اسکریپت Simple Analytics را در هر صفحه بارگذاری می‌کند. نیازی به شناسه نیست: بازدیدها از روی دامنه به سایت شما مرتبط می‌شوند.',
        ],
        'hostname' => [
            'label' => 'نام دامنه',
            'helper' => 'اختیاری: بازدیدها به‌جای دامنه فعلی زیر این دامنه (مثلاً example.com) شمرده می‌شوند.',
        ],
    ],
];
