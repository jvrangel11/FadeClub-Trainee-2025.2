<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\ListaPostsController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');

    $router->get('lista-posts', 'ListaPostsController@index');
    
    $router->get('lista-posts/search', 'ListaPostsController@index');

    $router->get('sidebar', 'SidebarController@index');


