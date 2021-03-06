<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/sitemap/blueprints.yaml',
    'modified' => 1456438756,
    'data' => [
        'name' => 'Sitemap',
        'version' => '1.5.0',
        'description' => 'Provide automatically generated **XML sitemaps** with this very useful, but simple to configure, Grav plugin.',
        'icon' => 'map-marker',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-sitemap',
        'keywords' => 'sitemap, plugin, xml, map, index',
        'bugs' => 'https://github.com/getgrav/grav-plugin-sitemap/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'label' => 'Route to sitemap',
                    'placeholder' => '/sitemap',
                    'validate' => [
                        'pattern' => '/([a-z\\-_]+/?)+'
                    ]
                ],
                'ignores' => [
                    'type' => 'array',
                    'label' => 'Ignore',
                    'help' => 'URLs to ignore',
                    'value_only' => true,
                    'placeholder_value' => '/ignore-this-route'
                ]
            ]
        ]
    ]
];
