<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/tc-grav/user/plugins/gantry5/engines/nucleus/blueprints/pages/modular/features.yaml',
    'modified' => 1520855109,
    'data' => [
        'title' => 'Features',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'name' => [
                                                    'default' => 'modular/features',
                                                    'data-options@' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'overrides' => [
                                    'fields' => [
                                        'header.template' => [
                                            'default' => 'modular/features',
                                            'data-options@' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'features' => [
                            'type' => 'tab',
                            'title' => 'Features',
                            'fields' => [
                                'header.features' => [
                                    'name' => 'features',
                                    'type' => 'list',
                                    'label' => 'Features',
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'Icon'
                                        ],
                                        '.header' => [
                                            'type' => 'text',
                                            'label' => 'Header'
                                        ],
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Text'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
