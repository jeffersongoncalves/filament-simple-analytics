<?php

return [
    'navigation_label' => 'Simple Analytics',
    'navigation_group' => '设置',
    'title' => 'Simple Analytics 设置',
    'sections' => [
        'simple_analytics' => [
            'heading' => 'Simple Analytics',
            'description' => '为你的网站配置 Simple Analytics 跟踪代码。',
        ],
    ],
    'fields' => [
        'enabled' => [
            'label' => '启用跟踪',
            'helper' => '在每个页面加载 Simple Analytics 脚本。无需 ID：访问会按域名关联到你的网站。',
        ],
        'hostname' => [
            'label' => '主机名',
            'helper' => '可选：将访问计入此域名（例如 example.com），而不是当前域名。',
        ],
    ],
];
