<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FadeClub - Login</title>
    <link rel="stylesheet" href="../../../public/css/login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo-area">
                <img src="../../../public/assets/fadeclub-logo.png" alt="Logo FadeClub">
            </div>
            <form action="/login" method="POST"> 
                <div class="form-area">
                    <div class="mensagem-erro">
                        <p>
                            <?php
                            session_start();
                            if(isset($_SESSION['mensagem-erro']))
                                echo $_SESSION['mensagem-erro'];
                            unset($_SESSION['mensagem-erro']);
                            ?>
                        </p>
                    </div>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="seuemail@gmail.com">

                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="************">

                    <button type="submit">Login</button>
                </div>
            </form>    
        </div>
    </div>
</body>
</html>