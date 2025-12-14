<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingPageController
{

    public function index()
    {

        $data = App::get('database')->selectPosts();

        return view('site/landing-page' , compact('data'));
    }
}

