<?php

define('ROOT', __DIR__);
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);

$dotenv->load();
$dotenv->required('APP_BOT_OAUTH_TOKEN');

date_default_timezone_set('Europe/Riga');
