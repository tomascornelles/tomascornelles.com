<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/tomascornelles.com/user/plugins/ampimage/blueprints.yaml',
    'modified' => 1522055216,
    'data' => [
        'name' => 'Ampimage',
        'version' => '0.1.0',
        'description' => 'Replaces img-tag with AMP-images',
        'icon' => 'bolt',
        'author' => [
            'name' => 'Kristoffer Ekendahl',
            'email' => 'kristoffer.ekendahl@gmail.com',
            'url' => 'http://kristoffer.ekendahl.net'
        ],
        'homepage' => 'https://github.com/Krillko/amp-image-for-grav',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, amp, accelerated mobile pages, image',
        'bugs' => 'https://github.com/Krillko/amp-image-for-grav/issues',
        'docs' => 'https://github.com/Krillko/amp-image-for-grav/README.md',
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
                'addFigure' => [
                    'type' => 'toggle',
                    'label' => 'Add &lt;Figure&gt; Element',
                    'help' => 'Adds figure and figcaption tag around image',
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
                'moveClassToFigure' => [
                    'type' => 'toggle',
                    'label' => 'Move class to figure',
                    'help' => 'Moves class attr from image tag to parent figure',
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
                'defaultLayout' => [
                    'type' => 'select',
                    'label' => 'Default amp layout attribute',
                    'help' => 'Amp image requires a layout mode',
                    'default' => 'responsive',
                    'options' => [
                        'responsive' => 'responsive',
                        'fill' => 'fill',
                        'fixed' => 'fixed',
                        'fixed-height' => 'fixed-height',
                        'flex-item' => 'flex-item',
                        'nodisplay' => 'nodisplay'
                    ]
                ]
            ]
        ]
    ]
];
