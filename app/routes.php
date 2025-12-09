<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

$router->get('tabelaUsuarios', 'UsuariosController@index');
$router->post('tabelaUsuarios/create', 'UsuariosController@store');
$router->post('tabelaUsuarios/edit', 'UsuariosController@edit');
$router->post('tabelaUsuarios/delete', 'UsuariosController@delete');