<?php

return [
    'externalApi' => [
        'pokeapi' => [
            'baseUrl' => 'https://pokeapi.co/api/v2'
        ]
    ],
    'database' => [
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'dbname' => $_ENV['DB_DATABASE'],
        'charset' => $_ENV['DB_CHARSET']
    ]
];