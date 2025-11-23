<?php
namespace App\Controllers;
use App\Core\App;
use Exception;

class LoginController 
{
    public function exibirLogin(): mixed
    {
        
    session_start();
    
    if(isset($_SESSION['id'])){
        header(header: 'Location: /dashboard');
    }

        return view(name: 'admin/login');
    }

    public function exibirDashboard(): mixed
    {
        return view(name: 'admin/dashboard');
    }
    
    public function efetuaLogin(): void
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = App::get(key: 'database')->verificaLogin($email, $senha);

        if($user != false){
            session_start();
            $_SESSION['id'] = $user->id;
            header(header: 'Location: /dashboard');
        }
        else{
            session_start();
            $_SESSION['mensagem-erro'] = "Usuário e/ou senha incorretos";
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