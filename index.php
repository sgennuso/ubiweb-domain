<?php

// Composer Autoloader
require __DIR__ . '/vendor/autoload.php';

// Load Environment
$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();
$corePath = getenv('CORE_PATH');

// Load Ubiweb Core
require $corePath . '/bootstrap.php';

// Instantiate App
$app = new Ubiweb\Site(__DIR__);

require __DIR__ . "/app/routes.php";

$app->run();
