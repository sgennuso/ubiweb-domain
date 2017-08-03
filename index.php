<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

require getenv('CORE_PATH') . '/bootstrap.php';

$app = new App();
$app->run();
