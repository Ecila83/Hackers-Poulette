<?php

function connect_db() {
    $dsn = 'mysql:dbname=hackers_poulette;host=db';
    $user = 'root';
    $password = 'KWmuLNjpzseXcTUNcnpz';
    $pdo = new PDO($dsn, $user, $password);

    return $pdo;
}
