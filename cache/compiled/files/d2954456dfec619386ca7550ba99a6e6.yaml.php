<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/config/site.yaml',
    'modified' => 1459876227,
    'data' => [
        'title' => 'The Tech Cave',
        'author' => [
            'name' => 'Tech Cave Team',
            'email' => 'john@email.com',
            'devon' => [
                'name' => 'Devon Smith',
                'email' => 'devo8604@gmail.com',
                'bio' => 'I am a professional Linux System Administrator and a web development hobbyist'
            ]
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month',
            3 => 'author'
        ],
        'metadata' => [
            'description' => 'A Blog sit for the nerd enthusiest'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/changelog' => '/blog/the-urban-jungle'
        ],
        'routes' => [
            '/something/else' => '/blog/focus-and-blur',
            '/another/one/(.*)' => '/blog/$1'
        ],
        'blog' => [
            'route' => ''
        ]
    ]
];
