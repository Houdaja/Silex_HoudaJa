<?php

//Il s'agit du paramétrage de la connexion à la base de données via DBAL.
// Doctrine (db)
$app['db.options'] = array(
    'driver' => 'pdo_mysql',
    'charset' => 'utf8',
    'host' => 'localhost',
    'port' => '3306',
    'dbname' => 'microcms',
    'user' => 'microcms_user',
    'password' => 'secret',
);
