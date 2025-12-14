<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FadeClub</title>
    <link rel="stylesheet" href="../../../public/css/login.css">
    <link rel="icon" type="image/png" href="../../../public/assets/Imagens/pageicon.png"/>
    <script src="https://kit.fontawesome.com/bf586e4b37.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'navbar.view.php'; ?>
    <div class="login-container">
        <div class="caixa-info">
            <div class="logo-area">
                <img src="../../../public/assets/fadeclub-logo.png" alt="Logo FadeClub">
            </div>
            <form action="/login" method="POST"> 
                <div class="form-area">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="seuemail@gmail.com">
                    
                    <label for="senha">Senha:</label>
                    <div class="input-container">
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                        <button class="botao-ver" type="button" id="toggleSenha"><i class="fa-regular fa-eye-slash"></i></button>
                    </div>
                    <button class="submit-btn" type="submit">Login</button>
                
                    <div class="mensagem-erro">
                        <p>
                            <?php
                            if(isset($_SESSION['mensagem-erro'])){
                                echo $_SESSION['mensagem-erro'];
                                unset($_SESSION['mensagem-erro']);
                            }
                            ?>
                        </p>
                    </div>
                    
                </div>
            </form>    
        </div>
    </div>
    <script src="../../../public/js/login.js"></script>
</body>
</html>