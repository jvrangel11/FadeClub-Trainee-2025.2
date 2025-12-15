<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SidebarController
{

    public function index()
    {

        $user = App::get('database')->selectOne(
            'usuarios',
            ['id' => $_SESSION['id']]
        );


        return view('admin/sidebar', [
            'name'     => $user->name,
            'img_path' => $user->img_path,
        ]);
    }
}