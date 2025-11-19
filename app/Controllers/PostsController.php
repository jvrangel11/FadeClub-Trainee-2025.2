<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostsController
{

    public function index()
    {

        $posts = App::get('database')->selectAll('posts');

        return view('admin/crudPosts', compact('posts'));
    }

    public function store(){
        $parameters = [
            'title'=> $_POST['title']
        ];

        App::get('database')->insert ('posts', $parameters);

        header('Location: /crudPosts');
    }
}