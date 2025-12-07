<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListaPostsController
{

    public function index()
    {
        $page = 1;
        if(isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])) {
        $page = intval($_GET['paginacaoNumero']);

        if($page <= 0) {
            return redirect ('listaPosts');
        }
    }

        $itensPage = 5;
        $inicio = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('posts');

        if($inicio >= $rows_count) {
            return redirect ('listaPosts');
        }

        $posts = App::get('database')->selectAll('posts', $inicio, $itensPage);

        if(!empty($_GET['search']) && isset($_GET['search'])) {
            $posts = App::get('database')->selectAllWithSearch('posts', 'title', $_GET['search'], $inicio, $itensPage);
            $rows_count = App::get('database')->countAllWithSearch('posts', 'title', $_GET['search']);
        }

        $total_pages = ceil($rows_count/$itensPage);

        return view('site/listaPosts', compact('posts', 'page', 'total_pages'));
    }

    

}

