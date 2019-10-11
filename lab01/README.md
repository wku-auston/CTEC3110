# Getting started with the Slim Framework

Open terminal (bottom-right or Alt-F12) and run the following command
```$xslt
composer require slim/slim ^3
```
This will install the Slim Framework version 3 package in your project directory.

Create a new PHP file test_slim.php and paste in the following code
```$xslt
<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->run();
```

Run the PHP built-in server
```$xslt
php -S localhost:8000
```

Format the code by pressing CTRL-ALT-l

Access the following URLs on the browser
```$xslt
http://localhost:8000/test_slim.php/hello/Auston
```
