<?php

namespace App\Controllers\Frontend;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Slim\Views\Twig;

class RoundBarController {
	public function index(Request $request, Response $response, Twig $view) {
		return $view->render($response, 'frontend/round-bar.twig');
	}
}