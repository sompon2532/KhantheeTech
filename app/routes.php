<?php

/**
 * Backoffice
 */
$app->post('/admin/round-bar', ['App\Controllers\Backoffice\RoundBarController', 'manage'])->setName('admin.round-bar.index');
$app->get('/admin/round-bar', ['App\Controllers\Backoffice\RoundBarController', 'index'])->setName('admin.round-bar.index');
$app->get('/admin', ['App\Controllers\Backoffice\IndexController', 'index'])->setName('admin.index');

/**
 * Frontend
 */

$app->get('/contact', ['App\Controllers\Frontend\ContactController', 'index'])->setName('contact.index');

$app->get('/working', ['App\Controllers\Frontend\WorkingController', 'index'])->setName('working.index');

$app->get('/service', ['App\Controllers\Frontend\ServiceController', 'index'])->setName('service.index');


$app->get('/hot-rolled-structural-steel/wire-mesh', ['App\Controllers\Frontend\HotRolledStructuralSteel\WireMeshController', 'index'])->setName('wire-mesh.index');
$app->get('/hot-rolled-structural-steel/wide-flange', ['App\Controllers\Frontend\HotRolledStructuralSteel\WideFlangeController', 'index'])->setName('wide-flange.index');
$app->get('/hot-rolled-structural-steel/i-beam', ['App\Controllers\Frontend\HotRolledStructuralSteel\IBeamController', 'index'])->setName('i-beam.index');
$app->get('/hot-rolled-structural-steel/h-beam', ['App\Controllers\Frontend\HotRolledStructuralSteel\HBeamController', 'index'])->setName('h-beam.index');
$app->get('/hot-rolled-structural-steel/channel', ['App\Controllers\Frontend\HotRolledStructuralSteel\ChannelController', 'index'])->setName('channel.index');
$app->get('/hot-rolled-structural-steel', ['App\Controllers\Frontend\HotRolledStructuralSteel\HotRolledStructuralSteelController', 'index'])->setName('hot-rolled-structural-steel.index');


$app->get('/cold-formed-structural-steel/carbon-steel-square-pipes', ['App\Controllers\Frontend\CarbonSteelSquarePipesController', 'index'])->setName('carbon-steel-square-pipes.index');
$app->get('/cold-formed-structural-steel/carbon-steel-rectangular-pipes', ['App\Controllers\Frontend\CarbonSteelRectangularPipesController', 'index'])->setName('carbon-steel-rectangular-pipes.index');
$app->get('/cold-formed-structural-steel/cold-formed-channel', ['App\Controllers\Frontend\ColdFormedChannelController', 'index'])->setName('cold-formed-channel.index');
$app->get('/cold-formed-structural-steel/light-lip-channel', ['App\Controllers\Frontend\LightLipChannelController', 'index'])->setName('light-lip-channel.index');
$app->get('/cold-formed-structural-steel/galvanized-steel-pipe', ['App\Controllers\Frontend\GalvanizedSteelPipeController', 'index'])->setName('galvanized-steel-pipe.index');
$app->get('/cold-formed-structural-steel/carbon-steel-tubes', ['App\Controllers\Frontend\CarbonSteelTubesController', 'index'])->setName('carbon-steel-tubes.index');
$app->get('/cold-formed-structural-steel', ['App\Controllers\Frontend\ColdFormedStructuralSteelController', 'index'])->setName('cold-formed-structural-steel.index');


$app->get('/steel-iron/checkered-plate', ['App\Controllers\Frontend\CheckeredPlateController', 'index'])->setname('checkered-plate.index');
$app->get('/steel-iron/steel-plate', ['App\Controllers\Frontend\SteelPlateController', 'index'])->setname('steel-plate.index');
$app->get('/steel-iron/flat-bar', ['App\Controllers\Frontend\FlatBarController', 'index'])->setName('flat-bar.index');
$app->get('/steel-iron', ['App\Controllers\Frontend\SteelIronController', 'index'])->setName('steel-iron.index');


$app->get('/deformed-bar', ['App\Controllers\Frontend\DeformedBarController', 'index'])->setname('deformed-bar.index');
$app->get('/round-bar', ['App\Controllers\Frontend\RoundBarController', 'index'])->setname('round-bar.index');
$app->get('/', ['App\Controllers\Frontend\HomeController', 'index'])->setName('index');