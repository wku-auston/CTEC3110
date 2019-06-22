<?php

use \Psr\Http\Message\ServerRequestInterface as Request;

require 'vendor/autoload.php';
$app = new \Slim\App;
$app->get('/sayhi', 'sayhi');
$app->get('/sayhi2u/{name}', function (Request $request) {
    $name = $request->getAttribute('name');
    sayhi2u($name);
});
$app->run();
function sayhi()
{
    echo 'hello world';
}

function sayhi2u($name)
{
    echo 'Hi ' . $name;
}