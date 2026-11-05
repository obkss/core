<?php

return [

    'debug' => filter_var(env('DEBUG', false), FILTER_VALIDATE_BOOLEAN),

    'Security' => [
        'salt' => env('SECURITY_SALT', ''),
    ],

    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Postgres',
            'persistent' => false,
            'host' => 'dpg-dbmdosc9v7es73co40t0-a',
            'port' => '5432',
            'username' => 'emis_obkss_db_9zxa_user',
            'password' => 'tjgEWpNUHxn0OevcLSXPYNFEkdlXIgpE',
            'database' => 'emis_obkss_db_9zxa',
            'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
            'quoteIdentifiers' => true,
        ],
    ],

    'EmailTransport' => [
        'openemis' => [
            'className' => 'Smtp',
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'timeout' => 30,
            'username' => '',
            'password' => '',
            'client' => null,
            'tls' => true,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],

    'Email' => [
        'openemis' => [
            'transport' => 'openemis',
            'from' => ['noreply@example.com' => 'DoNotReply'],
        ],
    ]

];