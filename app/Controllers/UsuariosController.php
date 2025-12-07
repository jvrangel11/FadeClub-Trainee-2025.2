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
                return redirect('admin/index');
            }
        }

        $itensPage = 5;
        $inicio = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('users');

        if($inicio > $rows_count){
            return redirect('admin/index');
        }

        $users = App::get('database')->selectAll('users' , $inicio , $itensPage);

        $total_pages = ceil($rows_count / $itensPage);

        return view('admin/tabelaUsuarios', compact('users' , 'page' , 'total_pages'));
    }



    private function uploadFile($file){
        if(!isset($file) || $file['error'] !== UPLOAD_ERR_OK){
            return null;
        }

        if(!file_exists(self::UPLOAD_DIR)){
            mkdir(self::UPLOAD_DIR, 0777, true);
        }

        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);

        $fileName = time() . "_" . uniqid() . "." . $ext;

        $uploadPath = self::UPLOAD_DIR . $fileName;

        $dbPath = 'public/upload/' . $fileName;

        if(move_uploaded_file($file['tmp_name'], $uploadPath)){
            return $dbPath;
        }

        throw new Exception("Erro ao fazer upload do arquivo.");





    }




    public function store()
    {
        $imgPath = $this->uploadFile($_FILES['img_path'] ?? null);


        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],  
            'img_path' => $imgPath  
             
        ];

             App::get('database')->insert('users', $parameters);    

             header('Location: /tabelaUsuarios');

             
        
    }



    public function edit(){
    
   $id = $_POST['id'];

   $user = App::get('database')->selectById('users', $id);

   $newImgPath = $this->uploadFile($_FILES['img_path'] ?? null);


      $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],  
            'img_path' => $newImgPath
             
        ];

     

         App::get('database')->update('users', $id, $parameters);

          header('Location: /tabelaUsuarios');
   
    }

    public function delete(){
        $id = $_POST['id'];

                 App::get('database')->delete('users', $id);   
                           header('Location: /tabelaUsuarios');
 

    }


}