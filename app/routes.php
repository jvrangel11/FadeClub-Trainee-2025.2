<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\PostsController;
use App\Core\Router;

$router->get('', 'ExampleController@index');

$router->get('crudPosts', 'PostsController@index');

$router->post('crudPosts/create', 'PostsController@store');

$router->get('crudPosts/view', 'PostsController@store');

