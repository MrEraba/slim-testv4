<?php
$settings = require __DIR__ . '/../src/settings.php';
$db_settings = $settings['db'];
return [
    'paths' => [
        'migrations' => 'migrations'
    ],
    'migration_base_class' => '\MyProject\Migration\Migration',
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => 'dev',
        'dev' => [
            'adapter' => 'mysql',
            'host' => $db_settings['DB_HOST'],
            'name' => $db_settings['DB_NAME'],
            'user' => $db_settings['DB_USER'],
            'pass' => $db_settings['DB_PASSWORD'],
            'port' => $db_settings['DB_PORT']
        ]
    ]
];