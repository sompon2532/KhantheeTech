<?php

session_start();

use App\App;

require __DIR__ . '/../vendor/autoload.php';

$app = new App;

require __DIR__ . '/../app/routes.php';