<?php

namespace App\Controllers\Backoffice;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Slim\Views\Twig;

class RoundBarController {
	public function index(Request $request, Response $response, Twig $view) {
		return $view->render($response, 'Backoffice/round-bar/round-bar.twig');
	}

	public function manage(Request $request, Response $response, Twig $view) {
		var_dump($request->getUploadedFiles());
	}
}