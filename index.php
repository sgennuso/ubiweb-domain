<?php

// Composer Autoloader
require __DIR__ . '/vendor/autoload.php';

// Load Environment
$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Load Ubiweb Core
require getenv('CORE_PATH') . '/bootstrap.php';

// Instantiate App
$app = new Ubiweb\Site(__DIR__);
$app->run();
