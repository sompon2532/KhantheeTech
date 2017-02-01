<?php

namespace App\Controllers\Backoffice;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Slim\Views\Twig;

class IndexController {
	public function index(Request $request, Response $response, Twig $view) {
		return $view->render($response, 'Backoffice/index.twig');
	}
}