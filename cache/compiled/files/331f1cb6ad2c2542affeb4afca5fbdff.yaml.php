<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/tomascornelles.com/user/plugins/advanced-pagecache/blueprints.yaml',
    'modified' => 1522070910,
    'data' => [
        'name' => 'AdvancedPageCache',
        'version' => '1.2.0',
        'description' => 'AdvancedPageCache turbo charges your site by statically caching pages.',
        'icon' => 'dashboard',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-advanced-pagecache',
        'keywords' => 'static, cache, plugin, performance',
        'bugs' => 'https://github.com/getgrav/grav-plugin-advanced-pagecache/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'enabled_with_params' => [
                    'type' => 'toggle',
                    'label' => 'Enabled with Params',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable if there are params set on this URI (eg. /color:blue)'
                ],
                'enabled_with_query' => [
                    'type' => 'toggle',
                    'label' => 'Enabled with Query',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable if there are query options set on this URI (eg. ?color=blue)'
                ],
                'whitelist' => [
                    'type' => 'array',
                    'value_only' => true,
                    'label' => 'Whitelist',
                    'help' => 'Enable the plugin only when calling these page paths',
                    'placeholder_key' => NULL,
                    'placeholder_value' => '/whitelist-this-route'
                ],
                'blacklist' => [
                    'type' => 'array',
                    'value_only' => true,
                    'label' => 'Blacklist',
                    'help' => 'Disable the plugin when calling these page paths',
                    'placeholder_key' => NULL,
                    'placeholder_value' => '/blacklist-this-route'
                ]
            ]
        ]
    ]
];
