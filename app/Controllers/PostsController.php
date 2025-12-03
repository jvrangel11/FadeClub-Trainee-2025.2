<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostsController
{

    public function index()
    {
        $page = 1;
        if(isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])) {
        $page = intval($_GET['paginacaoNumero']);

        if($page <= 0) {
            return redirect ('admin/crudPosts');
        }
    }

        $itensPage = 5;
        $inicio = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('posts');

        if($inicio >= $rows_count) {
            return redirect ('admin/crudPosts');
        }

        $posts = App::get('database')->selectAll('posts', $inicio, $itensPage);

        $total_pages = ceil($rows_count/$itensPage);

        return view('admin/crudPosts', compact('posts', 'page', 'total_pages'));
    }

    public function store(){

        $temporario = $_FILES['img_path']['tmp_name'];
        $nomeimagem = sha1(uniqid($_FILES['img_path']['name'],true)) . "." . pathinfo($_FILES['img_path']['name'], PATHINFO_EXTENSION);
        $destinoimagem ="public/assets/";
        $caminhodaimagem = $destinoimagem . $nomeimagem;
        move_uploaded_file($temporario, $caminhodaimagem);

        $parameters = [
            'title'=> $_POST['title'],
            'origin'=> $_POST['origin'],
            'story'=> $_POST['story'],
            'curiosity'=> $_POST['curiosity'],
            'tips'=> $_POST['tips'],
            'products'=> $_POST['products'],
            'img_path'=> $caminhodaimagem,
            'user_id'=> 1
        ];

echo implode(', ', $parameters);

        App::get('database')->insert ('posts', $parameters);

        header('Location: /crudPosts');
    }

    public function edit(){

                $parameters = [
            'title'=> $_POST['title'],
            'origin'=> $_POST['origin'],
            'story'=> $_POST['story'],
            'curiosity'=> $_POST['curiosity'],
            'tips'=> $_POST['tips'],
            'products'=> $_POST['products'],
            'user_id'=> 1
        ];

        $id = $_POST['id'];

        App::get('database')->update ('posts', $id, $parameters);

        header('Location: /crudPosts');
    }

    public function delete(){
        $id = $_POST['id'];

        App::get('database')->delete ('posts', $id);

        header('Location: /crudPosts');
    }

}

