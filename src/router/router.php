<?php
/**
 * Created by PhpStorm.
 * User: lucas.vieira
 * Date: 20/06/2018
 * Time: 17:14
 */
// Create Router instance
$router = new \Bramus\Router\Router();

$router->setNamespace('\App\Controllers');

$router->get("/", "HomeController@index");

$router->run();