<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // DB Conecction
        'db' => [
            'DB_HOST' => 'localhost',
            'DB_NAME' => 'myproject',
            'DB_USER' => 'root',
            'DB_PASSWORD' => '',
            'DB_PORT' => '3306'
        ]
    ],
];
