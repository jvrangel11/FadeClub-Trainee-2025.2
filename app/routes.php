<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\ListaPostsController;
use App\Core\Router;
use App\Controllers\LoginController;
use App\Controllers\PostsController;
use App\Controllers\LandingPageController;
use App\Controllers\PaginaIndividualController;
use App\Controllers\SobreNosController;

    $router->get('', 'ExampleController@index');

    $router->get('lista-posts', 'ListaPostsController@index');
    
    $router->get('lista-posts/search', 'ListaPostsController@index');

    $router->get('sidebar', 'SidebarController@index');

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

    $router->get('landing-page', 'LandingPageController@index');
    $router->get('pagina-individual/{id}', 'PaginaIndividualController@index');
    $router->get('sobre-nos', 'SobreNosController@index');

    $router->get('post', 'PostsController@show');
?>
