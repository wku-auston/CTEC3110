<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

require 'vendor/autoload.php';

$container['tc'] = function ($container) {
    require 'soap.php';
    $model = new TemperatureConverter();
    return $model;
};

$app = new \Slim\App($container);

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/celsius/{t}', function (Request $request, Response $response) {
    $c = $request->getAttribute('t');
    $tc = $this->get('tc');
    $f = $tc->CelsiusToFahrenheit($c);
    $response->getBody()->write($f);
    return $response;
});

$app->get('/fahrenheit/{t}', function (Request $request, Response $response) {
    $f = $request->getAttribute('t');
    $tc = $this->get('tc');
    $c = $tc->FahrenheitToCelsius($f);
    $response->getBody()->write($c);
    return $response;
});

$app->run();
