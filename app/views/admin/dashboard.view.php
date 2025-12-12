<?php
    session_start();

    if(!isset($_SESSION['id'])){
        header(header: 'Location: /login');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../../public/css/dashboard.css">
    <link rel="stylesheet" href="../../../public/css/dashboardResponsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="blur">
            <main class="conteudo">
                <div class="logo">
                    <img src="../../../public/assets/Imagens/logo.png" alt="" class="logoImg">
                </div>
                <nav class="links">
                    <a href="/crud-posts" class="postagens">
                        <div class="linkIcone iconePostagens">
                            <img src="../../../public/assets/SVG/posts.svg" alt="">
                        </div>
                        <p>Postagens</p>
                    </a>
                    <a href="/tabela-usuarios" class="usuarios">
                        <div class="linkIcone iconeUsuarios">
                            <img src="../../../public/assets/SVG/usuarios.svg" alt="">
                        </div>
                        <p>Usuários</p>
                    </a>
                </nav>
                <div class="botoes">
                    <div class="home">
                        <div class="iconeHome">
                            <img src="../../../public/assets/SVG/home.svg" alt=""> 
                        </div>
                        <p>HOME</p>
                    </div>
                    <div class="logout">
                        <a href="/logout">
                            <div class="iconeLogout">
                                <img src="../../../public/assets/SVG/logout.svg" alt="">
                            </div>
                            <p>LOG-OUT</p>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>