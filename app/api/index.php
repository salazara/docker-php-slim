<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

///
// API endpoints
///

$app = AppFactory::create();
$app_should_debug = true;
$app->addErrorMiddleware($app_should_debug, $app_should_debug, $app_should_debug);

$app->get('/', function (Request $request, Response $response) {
    $doc_url = 'https://www.slimframework.com/docs/v4/objects/application.html';

    $response->getBody()->write(
        '<h3>Hello world</h3>' .
        '<p>See <a href="' . $doc_url . '" target="_blank">' . $doc_url . '</a> to continue building your API.</p>'
    );

    return $response;
});

$app->run();