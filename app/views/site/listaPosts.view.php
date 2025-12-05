<!DOCTYPE html>
<html lang="pt-br" class="">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projeto FadeClub</title>
    <link rel="stylesheet" href="../../../public/css/listaPosts.css" />
  </head>

   <body>

    <div class="title">
      <p>Últimas Postagens</p>
    </div>

    
      <div id="searching-camp">
        <div class="search">
          <label for="busca"></label>
          <input type="text" id="busca" name="busca" placeholder="O que você procura?">
          
          
          <div class="filter-close-buttons">
            
            <button id="search-button">
              <ion-icon name="search-outline"></ion-icon>
            </button>  
            <button id="filter-button">  
              <ion-icon name="filter-outline"></ion-icon>
            </button>
            
            <button id="close-button">
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>
          </div>
          
          
          <div id="filter-options">
            <button class="filter-button1">Tendências</button>
              <button class="filter-button4">Inspirações</button>
              <button class="filter-button2">Dicas</button>
              <button class="filter-button3">Técnicas</button>
            </div>
          </div>
      </div>
    </div>
    
    <div class="posts-list"> 
      <?php foreach($posts as $post): ?>
      <div class="post-item">
        <div class="post-info">
          <div class="post-title">
            <h2><?= $post->title ?></h2>
            <p><?= $post->story ?></p>
          </div>
          <div class="post-footer">
            <div class="autor">
            <span>autor</span>
            </div>
            <div class="tag-btn">

              <h5>Tendências</h5>
              <div class="verMais"><img src="../../../public/assets/SVG/verMais.svg" alt=""></div>
            </div>
          </div>
        </div>
          <div class="post-image">
            <?php var_dump($post->img_path); ?>

            <img src="<?= $post->img_path ?>" alt="Imagem do post">
          </div>
      </div>


<!--
      <div class="post-item-reverse">
        <div class="post-info">
          <div class="post-title">
            <h2><?= $post->title ?></h2>
            <p>Conteúdo da postagem 2.</p>
          </div>
          <div class="post-footer">
            <div class="autor">
            <span>Autor: Maria Oliveira</span>
            </div>
            <div class="tag-btn">

              <h5>Tendências</h5>
              <div class="verMais"><img src="../../../public/assets/SVG/verMais.svg" alt=""></div>
            </div>
          </div>
        </div>
          <div class="post-image-reverse">
            <img src="./../../../public/assets/mesa-de-cafe-de-luxo-dentro-bar-barista-gerada-por-ia.jpg" alt="Imagem de um homem com cabelo estiloso">
          </div>
      </div>
      -->
            <?php endforeach; ?>

    </div>
        

        <div class="paginacao">
            <div>
                <a class="botaoEsquerda " href="?paginacaoNumero=<?= $page - 1?>">
                    &#9664
                </a>
            </div>
            <div class="botoesPaginacao">
                <?php for($page_number = 1; $page_number <= $total_pages; $page_number++): ?>
                    <button>
                        <a class="botaoPaginacao <?= $page_number == $page ? "active" : "" ?> " href="?paginacaoNumero=<?= $page_number?>">
                            <?= $page_number ?>
                        </a>
                    </button>
                <?php endfor ?>
            </div>
            <div>
                <a class="botaoDireita" href="?paginacaoNumero=<?= $page + 1?>">
                    &#9654
                </a>
            </div>
        </div>

      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

      <script src="../../../public/js/listaPosts.js"></script>
  </body>