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
            'title'=> $_POST['title'],
            'origin'=> $_POST['origin'],
            'story'=> $_POST['story'],
            'curiosity'=> $_POST['curiosity'],
            'tips'=> $_POST['tips'],
            'products'=> $_POST['products'],
            'user_id'=> 1
        ];

echo implode(', ', $parameters);

        App::get('database')->insert ('posts', $parameters);

        header('Location: /crudPosts');
    }
}