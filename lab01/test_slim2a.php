<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
$app = new \Slim\App;
$app->get('/sayhi', 'sayhi');
$app->get('/sayhi2u/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $message = sayhi2u($name);
    return $response->write($message);
});
$app->run();

function sayhi()
{
    echo 'hello world';
}

function sayhi2u($name)
{
    return 'Hi ' . $name;
}
