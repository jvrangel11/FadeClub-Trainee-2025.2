<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingPageController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');

        return view('site/landing-page' , compact('posts'));
    }
}

