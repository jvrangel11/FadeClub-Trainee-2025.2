<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{
    const UPLOAD_DIR = 'public/upload/';

    public function index()
    {
        $page = 1;
        if(isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])){
            $page = intval($_GET['paginacaoNumero']);

            if($page <=0){
                return redirect('tabelaUsuarios');
            }
        }

        $itensPage = 5;
        $inicio = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('users');

        $total_pages = ceil($rows_count / $itensPage);

        if($inicio >= $rows_count){
            return redirect('tabelaUsuarios?paginacaoNumero='.$total_pages );
        }
        $users = App::get('database')->selectAll('users' , $inicio , $itensPage);


        return view('admin/tabelaUsuarios', compact('users' , 'page' , 'total_pages'));
    }

    public function store()
    {


        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'passwordint' => $_POST['passwordint'],    
             
        ];
             App::get('database')->insert('users', $parameters);    

             header('Location: /tabelaUsuarios');

             
        
    }



    public function edit(){

      $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'passwordint' => $_POST['passwordint'],    
             
        ];

        $id = $_POST['id'];

         App::get('database')->update('users', $id, $parameters);

          header('Location: /tabelaUsuarios');
   
    }

    public function delete(){
        $id = $_POST['id'];

                 App::get('database')->delete('users', $id);   
                           header('Location: /tabelaUsuarios');
 

    }


}