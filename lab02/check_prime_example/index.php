<?php
/** index.php
 *
 * comments here
 */
require '../vendor/autoload.php';
$app = new \Slim\App;
require 'routes.php';
$app->run();