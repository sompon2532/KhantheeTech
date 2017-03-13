<?php

namespace App\Controllers\Frontend\HotRolledStructuralSteel;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Slim\Views\Twig;

class HotRolledStructuralSteelController {
	public function index(Request $request, Response $response, Twig $view) {
		return $view->render($response, 'frontend/steel/hot-rolled-structural-steel/hot-rolled-structural-steel.twig');
	}
}