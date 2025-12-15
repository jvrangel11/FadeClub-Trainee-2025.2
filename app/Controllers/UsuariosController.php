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
                return redirect('tabela-usuarios');
            }
        }

        $itensPage = 5;
        $inicio = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('users');

        $total_pages = ceil($rows_count / $itensPage);

        if($inicio >= $rows_count){
            return redirect('tabela-usuarios?paginacaoNumero='.$total_pages );
        }
        $users = App::get('database')->selectAll('users' , $inicio , $itensPage);


        return view('admin/tabela-usuarios', compact('users' , 'page' , 'total_pages'));
    }



    private function uploadFile($file){
        if(!isset($file) || $file['error'] !== UPLOAD_ERR_OK){
            return './public/assets/Imagens/usuario.png';
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
        $imgPath = $this->uploadFile($_FILES['img_path'] ?? './public/assets/Imagens/usuario.png' );


        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],  
            'img_path' => $imgPath  
             
        ];

             App::get('database')->insert('users', $parameters);    

             header('Location: /tabela-usuarios');

             
        
    }



    public function edit(){

   $id = $_POST['id'];

   $user = App::get('database')->selectOne('users', $id);

   $newImgPath = $_POST['old_img_path'] ?? $user->img_path;
   

   if(!empty($_FILES['img_path']['name']) && $_FILES['img_path']['error'] === UPLOAD_ERR_OK) {
    
      
        $uploadResult = $this->uploadFile($_FILES['img_path']);

       
        if ($uploadResult) {
            
          
            if (!empty($user['img_path']) && file_exists($user['img_path'])) {
                unlink($user['img_path']);
            }

         
            $newImgPath = $uploadResult;
        }
    }


      $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],  
            'img_path' => $newImgPath
             
        ];

     

         App::get('database')->update('users', $id, $parameters);

          header('Location: /tabela-usuarios');
   
    }

    public function delete(){
        $id = $_POST['id'];

        $user = App::get('database')->selectOne('users', $id);

        if($user && !empty($user->img_path) && file_exists($user->img_path)){
            unlink($user->img_path);
        }




                 App::get('database')->delete('users', $id);   
                           header('Location: /tabela-usuarios');
 

    }


}