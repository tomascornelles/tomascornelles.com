<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/tc-grav/user/plugins/gantry5/engines/nucleus/particles/spacer.yaml',
    'modified' => 1520855109,
    'data' => [
        'name' => 'Spacer',
        'description' => 'Add empty column to the row.',
        'type' => 'spacer',
        'icon' => 'fa-arrows-h',
        'hidden' => false,
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable spacer.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Add empty spacer column to the row. Shows up as an empty space in your layout.'
                ]
            ]
        ]
    ]
];
