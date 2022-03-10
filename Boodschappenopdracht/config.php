<?php

return [
    "database" => [
        "name" => "boodschappen",
        "username" => "root",
        "password" => "admin",
        "connection" => "mysql:host=127.0.0.1",
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];