<?php

function DB_Connect()
{

    $pdo = new \PDO(
        'mysql:host=localhost; dbname=agency; charset=utf8',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
    return $pdo;
}

$pdo = DB_Connect();
session_start();