<?php

use Illuminate\Database\Capsule\Manager as Database;
$database = new Database;
$configurar = parse_ini_file("settings.ini.php", true);
$driver  = $configurar['basedatos']['driver'];
$host    = $configurar['basedatos']['host'];
$user    = $configurar['basedatos']['user'];
$pass    = $configurar['basedatos']['pass'];
$dbname  = $configurar['basedatos']['dbname'];
$charset = $configurar['basedatos']['charset'];

$database->addConnection([
    'driver'    => $driver,
    'host'      => $host,
    'database'  => $dbname,
    'username'  => $user,
    'password'  => $pass,
    'charset'   => $charset,
    'collation' => 'utf8_unicode_ci',
]);

$database->setAsGlobal();
$database->bootEloquent();
