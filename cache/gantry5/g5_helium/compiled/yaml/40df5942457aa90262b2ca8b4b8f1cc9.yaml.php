<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/tc-grav/user/plugins/gantry5/engines/nucleus/particles/breadcrumbs.yaml',
    'modified' => 1520855109,
    'data' => [
        'name' => 'Breadcrumbs',
        'description' => 'Breadcrumbs Particle for Grav Breadcrumbs Plugin',
        'type' => 'particle',
        'icon' => 'fa-ellipsis-h',
        'dependencies' => [
            'platform' => [
                'grav' => [
                    'plugin' => [
                        'breadcrumbs' => true
                    ]
                ]
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable breadcrumbs particles.',
                    'default' => true
                ]
            ]
        ]
    ]
];
