<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/config/site.yaml',
    'modified' => 1459869435,
    'data' => [
        'title' => 'Grav',
        'author' => [
            'devon' => [
                'name' => 'Devon Smith',
                'email' => 'devo8604@gmail.com',
                'bio' => 'I am a professional Linux System Administrator and a web development hobbyist'
            ]
        ],
        'blog' => [
            'route' => ''
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month',
            3 => 'author'
        ],
        'redirects' => [
            '/changelog' => '/blog/the-urban-jungle'
        ],
        'routes' => [
            '/something/else' => '/blog/focus-and-blur',
            '/another/one/(.*)' => '/blog/$1'
        ]
    ]
];
