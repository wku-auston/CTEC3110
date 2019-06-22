<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once 'PetName.php';
require_once 'PetNameView.php';
require 'vendor/autoload.php';
$app = new \Slim\App;
$app->get('/', 'do_pets');
$app->run();
function do_pets()
{
    $f_pet_1_name = '';
    $f_pet_2_name = '';
//create a new object
    $obj_my_pet = new PetName();
//assign a value to the petname attribute in the object
    $obj_my_pet->set_pet_name('Billy');
//retrieve the pet's name from the object's attribute
    $f_pet_name = $obj_my_pet->get_pet_name();
    $f_pet_1_name = 'Pet\'s name is ' . $f_pet_name;
//assign a new value to the the petname attribute in the object
    $obj_my_pet->set_pet_name('Gums');
//retrieve the pet's name from the object's attribute
    $f_pet_name = $obj_my_pet->get_pet_name();
    $f_pet_2_name = 'New pet\'s name is ' . $f_pet_name;
// create a view object and pass the output strings to the view object
    $obj_pets_view = new PetNameView();
    $obj_pets_view->create_output($f_pet_1_name, $f_pet_2_name);
    $output_html = $obj_pets_view->get_output_html();
    echo $output_html;
}