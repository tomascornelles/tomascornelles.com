<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/tomascornelles.com/user/config/plugins/backup-manager.yaml',
    'modified' => 1521699692,
    'data' => [
        'enabled' => true,
        'backup' => [
            'testmode' => [
                'enabled' => false,
                'compressionratio' => 1.2
            ],
            'phptimeout' => 600,
            'storage' => [
                'maxspace' => 10,
                'keepdays' => 10,
                'showbackups' => 50
            ],
            'log' => true,
            'ignore' => [
                'foldercase' => true,
                'toplevelintersect' => false,
                'foldersintersect' => false,
                'forceaddasempty' => false
            ]
        ]
    ]
];
