<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\PostsController;
use App\Controllers\LoginController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');

    $router->get('crudPosts', 'PostsController@index');

    $router->post('crudPosts/create', 'PostsController@store');

    $router->get('crudPosts/view', 'PostsController@store');

$router->post('crudPosts/edit', 'PostsController@edit');

$router->post('crudPosts/delete', 'PostsController@delete');


    $router->get('login', 'LoginController@exibirLogin');

    $router->get('dashboard', 'LoginController@exibirDashboard');

    $router->post('login', 'LoginController@efetuaLogin');

    $router->post('logout', 'LoginController@logout');
?>
