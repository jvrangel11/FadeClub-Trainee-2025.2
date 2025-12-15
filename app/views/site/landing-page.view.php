<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FadeClub</title>
    <!-- * Importando CSS * -->
    <link rel="stylesheet" href="../../../public/css/landingPage.css">
    <link rel="stylesheet" href="../../../public/css/landingPageResponsive.css">
    <!-- * Importando Fontes * -->
    <!-- Anton -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!-- Montserrat -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Icone da guia -->
        <link rel="icon" type="image/png" href="../../../public/assets/Imagens/pageicon.png"/>
</head>
<body>
    <?php include 'navbar.view.php'; ?>
    <!-- Header guardava a navbar e  hero section, mas vai guaradar apenas a hero section -->
    <header class="cover">

        <section class="heroSection">
            <img class="logoFade" src="../../../public/assets/Imagens/logo.png" alt="">
            <div class="slogan">
                <p>Cortes que inspiram,</p>
                <p>estilo que conecta.</p>
            </div>
        </section>
    </header>
    <!-- Main vai guardar os dois carrosseis -->
    <main class="cover">
        <!-- Primeiro Carrossel -->
        <div class="genero destaques">Nossos Destaques</div>
            <section class="carrossel-container carrossel-destaques">
                <!-- Seta esquerda -->
                <div class="nav-arrow arrow-left1" id="seta-esquerda1">&#10094</div>
                    <div class="conteudo01">
                        <div class="card card07">
                            <img src="../../../public/assets/Cards/card07.jpg" alt="" class="imagem">
                            <div class="informacoes">
                                <div class="texto">
                                    <h1>A escolha certa.</h1>
                                    <div class="caixaLegenda">
                                        <p class="legenda">Desbaste ou precisão? Aprenda a diferença entre as tesouras e melhore o acabamento do seu corte. A ferramenta correta é metade do caminho para a perfeição.</p>
                                    </div>
                                    <p class="autor">De: Camila Ferreira</p>
                                </div>
                                <div class="especiais">
                                    <div class="tag tag07"><p>Técnicas</p></div>
                                    <div class="verMais"><img src="../../../public/assets/SVG/verMais.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="card card08">
                            <img src="../../../public/assets/Cards/card08.jpg" alt="" class="imagem">
                            <div class="informacoes">
                                <div class="texto">
                                    <h1>Inspire-se no clássico...</h1>
                                    <div class="caixaLegenda">
                                        <p class="legenda">Buscando um novo visual? O corte médio e ondulado retorna com força, oferecendo versatilidade e elegância. Perfeito para quem procura um estilo atemporal e cheio de personalidade.</p>
                                    </div>
                                    <p class="autor">De: Rodrigo Mendes</p>
                                </div>
                                <div class="especiais">
                                    <div class="tag tag08"><p>Inspirações</p></div>
                                    <div class="verMais"><img src="../../../public/assets/SVG/verMais.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="card card09">
                            <img src="../../../public/assets/Cards/card09.jpg" alt="" class="imagem">
                            <div class="informacoes">
                                <div class="texto">
                                    <h1>A arte da barba.</h1>
                                    <div class="caixaLegenda">
                                        <p class="legenda">Não é só aparar. É modelar, alinhar e hidratar. Encontre o profissional que entende que uma barba bem cuidada faz toda a diferença no seu estilo.</p>
                                    </div>
                                    <p class="autor">De: Léo Faier</p>
                                </div>
                                <div class="especiais">
                                    <div class="tag tag09"><p>Dicas</p></div>
                                    <div class="verMais"><img src="../../../public/assets/SVG/verMais.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="card card10">
                            <img src="../../../public/assets/Cards/card10.jpg" alt="" class="imagem">
                            <div class="informacoes">
                                <div class="texto">
                                    <h1>O segredo da escolha...</h1>
                                    <div class="caixaLegenda">
                                        <p class="legenda">Um bom barber pole aceso não garante a qualidade, mas um ambiente que valoriza a tradição e os detalhes é sempre um bom sinal de que o cuidado com seu cabelo e barba será de primeira.</p>
                                    </div>
                                    <p class="autor">De: O Mentor do Estilo</p>
                                </div>
                                <div class="especiais">
                                    <div class="tag tag10"><p>Dicas</p></div>
                                    <div class="verMais"><img src="../../../public/assets/SVG/verMais.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="card card11">
                            <img src="../../../public/assets/Cards/card11.jpg" alt="" class="imagem">
                            <div class="informacoes">
                                <div class="texto">
                                    <h1>A textura que...</h1>
                                    <div class="caixaLegenda">
                                        <p class="legenda">Criar e manter esse volume exige técnica! O segredo está no corte a seco para definir a forma, e em balms de alta qualidade para garantir a hidratação e o alinhamento perfeito.</p>
                                    </div>
                                    <p class="autor">De: Mestre Pedro</p>
                                </div>
                                <div class="especiais">
                                    <div class="tag tag11"><p>Técnicas</p></div>
                                    <div class="verMais"><img src="../../../public/assets/SVG/verMais.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="card card12">
                            <img src="../../../public/assets/Cards/card12.jpg" alt="" class="imagem">
                            <div class="informacoes">
                                <div class="texto">
                                    <h1>A visão que inspira.</h1>
                                    <div class="caixaLegenda">
                                        <p class="legenda">Olhe além do corte. Observe a arte, a dedicação e a precisão nas mãos do profissional. Permita que essa maestria seja a sua inspiração para transformar seu estilo.</p>
                                    </div>
                                    <p class="autor">De: Karlos Krugger</p>
                                </div>
                                <div class="especiais">
                                    <div class="tag tag12"><p>Inspirações</p></div>
                                    <div class="verMais"><img src="../../../public/assets/SVG/verMais.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Seta direita -->
                <div class="nav-arrow arrow-right1" id="seta-direita1">&#10095</div>
            </section>
            <!-- Segundo Carrossel -->
        <div class="genero ultimasPublicacoes">Ultimas Publicacões</div>
            <section class="carrossel-container carrossel-ultimas">
                <!-- Seta esquerda -->
                <div class="nav-arrow arrow-left2" id="seta-esquerda2">&#10094</div>
                    <div class="conteudo02">
                        <?php $contador=0; $limite=6; foreach($data as $i=>$post): if($contador >= $limite){ break; } $contador++;?>
                        <div class="card card01">
                            <img src="<?=  $post->img_path ?>" class="imagem">
                            <div class="informacoes">
                                <div class="texto">
                                    <h1><?= $post->title ?></h1>
                                    <div class="caixaLegenda">
                                        <p class="legenda"><?= $post->story ?></p>
                                    </div>
                                    <p class="autor"><?= $post->author_name ?></p>
                                </div>
                                <div class="especiais">
                                    <div class="tag tag01"><p><?= $post->tag ?></p></div>
                                    <a class="verMais" href="/post?id=<?= $post->id ?>"><img src="../../../public/assets/SVG/verMais.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                <!-- Seta direita -->
                <div class="nav-arrow arrow-right2" id="seta-direita2">&#10095</div>
            </section>
    </main>
    <footer></footer>

    <script src="../../../public/js/landingPage.js"></script>
    <?php include 'footer.view.php'; ?>
</body>
</html>
