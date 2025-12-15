<?php
namespace App\Controllers;
use App\Core\App;
use Exception;

class LoginController 
{
    public function exibirLogin(): mixed
    {
    
    if(isset($_SESSION['id'])){
        header(header: 'Location: /dashboard');
    }

        return view(name: 'site/login');
    }

    public function exibirDashboard(): mixed
    {
        return view(name: 'admin/dashboard');
    }
    
    public function efetuaLogin(): void
    {
        session_start();
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = App::get(key: 'database')->verificaLogin($email, $senha);


        if($user != null){
            $_SESSION['id'] = $user->id;
            $_SESSION['user'] = $user;
            header(header: 'Location: /dashboard');
        }
        else{
            /*session_start();*/
            $_SESSION['mensagem-erro'] = "Usuário e/ou senha incorretos";
            //var_dump($user);
            header(header: 'Location: /login');
        }

        
    }

    public function logout(): void
    {
        session_start();
        session_unset();
        session_destroy();
        header(header: 'Location: /login');
    }
}
?>