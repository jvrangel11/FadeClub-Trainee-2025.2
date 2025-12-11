<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\PostsController;
use App\Controllers\LoginController;
use App\Core\Router;

    $router->get('tabela-usuarios', 'UsuariosController@index');

    $router->get('crud-posts', 'PostsController@index');

    $router->post('crud-posts/create', 'PostsController@store');

    $router->get('crud-posts/view', 'PostsController@store');

    $router->post('crud-posts/edit', 'PostsController@edit');

    $router->post('crud-posts/delete', 'PostsController@delete');


    $router->get('login', 'LoginController@exibirLogin');

    $router->get('dashboard', 'LoginController@exibirDashboard');

    $router->post('login', 'LoginController@efetuaLogin');

    $router->get('logout', 'LoginController@logout');
    
    $router->post('tabela-usuarios/create', 'UsuariosController@store');
    $router->post('tabela-usuarios/edit', 'UsuariosController@edit');
    $router->post('tabela-usuarios/delete', 'UsuariosController@delete');
?>
