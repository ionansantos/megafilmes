<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/movie', 'MovieController@movie');
$router->get('/movie/{id}', 'MovieController@movieList');