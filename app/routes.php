<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\ListaPostsController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');

    $router->get('lista-Posts', 'ListaPostsController@index');
    
    $router->get('lista-Posts/search', 'ListaPostsController@index');

    $router->get('sidebar', 'SidebarController@index');


