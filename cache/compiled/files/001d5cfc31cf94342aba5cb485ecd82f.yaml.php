<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/tomascornelles.com/user/config/site.yaml',
    'modified' => 1522996518,
    'data' => [
        'title' => 'TomasCornelles',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Tomás Cornelles',
            'email' => 'tomascornelles@gmail.com'
        ],
        'taxonomies' => [
            0 => 'tag',
            1 => 'type',
            2 => 'tech',
            3 => 'client',
            4 => 'year'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
