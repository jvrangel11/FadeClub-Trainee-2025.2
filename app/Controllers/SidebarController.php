<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SidebarController
{

    public function index()
    {
        return view('admin/sidebar');
    }
}