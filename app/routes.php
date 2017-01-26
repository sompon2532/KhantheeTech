<?php

use Slim\Views\Twig;

$app->get('/', function ($response, Twig $twig) {
    return $twig->render($response, 'home.twig');
});