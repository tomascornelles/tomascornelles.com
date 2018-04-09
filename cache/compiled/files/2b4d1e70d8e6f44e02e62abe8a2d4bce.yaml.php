<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/tomascornelles.com/user/config/plugins/email.yaml',
    'modified' => 1521653922,
    'data' => [
        'enabled' => true,
        'from' => 'menos5@gmail.com',
        'from_name' => 'TC 2018',
        'to' => 'menos5@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'menos5@gmail.com',
                'password' => 'Cri55tina'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
