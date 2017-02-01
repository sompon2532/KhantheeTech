<?php

$app->get('/admin', ['App\Controllers\Backoffice\IndexController', 'index'])->setName('admin.index');

$app->get('/', ['App\Controllers\HomeController', 'index'])->setName('home');