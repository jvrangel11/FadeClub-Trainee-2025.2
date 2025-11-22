<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{
    const UPLOAD_DIR = 'public/upload/';

    public function index()
    {
         $users = App::get('database')->selectAll('users');

        return view('admin/tabelaUsuarios', compact('users'));
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