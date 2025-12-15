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

    <div class="login-container">
        <div class="botaoDeVoltar">
            <a class="botaoVoltar" href="/landing-page">
                <svg class="arrow" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.41431 4.70711L0.7072 4L9.31025e-05 4.70711L0.7072 5.41421L1.41431 4.70711ZM13.4143 5.70711C13.9666 5.70711 14.4143 5.25939 14.4143 4.70711C14.4143 4.15482 13.9666 3.70711 13.4143 3.70711V5.70711ZM4.7072 7.7486e-07L0.7072 4L2.12141 5.41421L6.12141 1.41421L4.7072 7.7486e-07ZM0.7072 5.41421L4.7072 9.41421L6.12141 8L2.12141 4L0.7072 5.41421ZM1.41431 5.70711H13.4143V3.70711H1.41431V5.70711Z"/>
                </svg>
            </a>
        </div>

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