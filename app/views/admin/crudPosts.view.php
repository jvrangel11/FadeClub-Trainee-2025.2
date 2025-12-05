<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Posts</title>
    <link rel="stylesheet" href="../../../public/css/posts.css">
    <link rel="stylesheet" href="../../../public/css/editar.css" />
    <script src="https://kit.fontawesome.com/bf586e4b37.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="tabela-container">
        <div class="table-header">
            <h1 class="titulo">Tabela de Posts</h1>
            <button class="btn-add" onclick="abrirModal('Criar')"><i class="fa-solid fa-plus"></i>Criar Post</button>
        </div>
        <div class="scroll-lateral">
            <table class="tabela">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Imagem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($posts as $post): ?>

                    <tr>
                        <td><?= $post->id ?></td>
                        <td class="title"><?= $post->title ?></td>
                        <td class="img-cell"><img src="<?=  $post->img_path ?>" alt=""></td>
                        <td class="acoes">
                            <button><i class="fa-solid fa-eye" onclick="abrirModal('Visualizar<?= $post->id ?>')"></i></button> 
                            <button><i class="fa-solid fa-pencil" onclick="abrirModal('editar<?= $post->id ?>')" ></i></button> 
                            <button><i class="fa-solid fa-trash" onclick="abrirModal('excluir<?= $post->id ?>')" ></i></button> 
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
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
    </div>

    <div class="modal-container" id="Criar">
        <div class="container-all">
            <div class="form-box">
                <div class="form-view">
                    <div class="form-left">
                        <div class="card">
                            <div class="image-section">
                                <form class="card-img" method="POST" action="crudPosts/create" enctype="multipart/form-data" >

                                    <img id="previewCriar" src="../../../public/assets/homem-na-barbearia-barbeando-barba.jpg" alt="Prévia imagem">
                                    
                                    <!-- Input escondido -->
                                    <input type="file" name="img_path" id="inputCriarImg" accept="image/*" style="display: none;">
                                    
                                    <!-- Botão visível -->
                                    <button type="button" class="image-btn" id="btnCriarImg">Selecionar imagem</button>
                            </div>
                        </div>
                        <div class="info-text">
                            <p1>Vamos adicionar um novo post!</p1>
                            <p2>Preencha as informações do post nos campos a seguir</p2>
                        </div>
                    </div>
                        <div class="form-right">
                            <label>Titulo*</label>
                            <textarea required type="textarea" name="title"></textarea>
                            <label>Origem*</label>
                            <textarea required type="text" name="origin"></textarea>
                            <label>História*</label>
                            <textarea required type="text" name="story"></textarea>
                            <label>Curiosidades*</label>
                            <textarea required type="text" name="curiosity"></textarea>
                            <label>Dicas do Barbeiro*</label>
                            <textarea required type="text" name="tips"></textarea>
                            <label>Produtos recomendados*</label>
                            <textarea required type="text" name="products"></textarea>

                            <div class="caixaBarraHorizontal">
                                <div class="barraHorizontal"></div>
                            </div>

                            <div class="save-cancel-btn">
                                <button class="cancel-btn" onclick="fecharModal('Criar')">Cancelar</button>
                                <button type="submit" class="submit-btn-all">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php foreach($posts as $post): ?>
    <div class="ver-container" id="Visualizar<?= $post->id ?>">
        <div class="container-all">
            <div class="form-box">
                <div class="form-view">
                    <div class="form-left">
                        <div class="card">
                            <div class="image-section">
                                <img src="<?= $post->img_path ?>" alt="Prévia imagem">
                                <button class="image-btn">Visualizar imagem</button>
                            </div>
                            <div id="modalVerImagem" class="modal-ver-imagem">
                                <span class="fechar-img" id="fecharVerImg">&times;</span>
                                <img id="imgVisualizar" name="img_path" class="conteudo-img">
                                <input type="file" name="img_path">
                            </div>
                        </div>
                        <div class="info-text">
                            <p1>Ver informações deste post</p1>
                            <p2>Apenas visualize quais são as informações sobre este post</p2>
                        </div>
                    </div>
                    <form class="form-right">                        
                        <label>Titulo</label>
                        <input readonly type="text" value="<?= $post->title ?>">
                        <label>Origem</label>
                        <input readonly type="text" value="<?= $post->origin ?>">
                        <label>História</label>
                        <input readonly type="text" value="<?= $post->story ?>">
                        <label>Curiosidades</label>
                        <input readonly type="text" value="<?= $post->curiosity ?>">
                        <label>Dicas do Barbeiro</label>
                        <input readonly type="text" value="<?= $post->tips ?>">
                        <label>Produtos recomendados</label>
                        <input readonly type="text" value="<?= $post->products ?>">

                        <div class="caixaBarraHorizontal">
                                <div class="barraHorizontal"></div>
                            </div>

                        <div class="save-cancel-btn">
                            <button class="cancel-btn" onclick="fecharModal('Visualizar')">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="editar-container" id="editar<?= $post->id ?>">
        <div class="container-all">
            <div class="form-box">
                <div class="form-view">
                    <form class="form" method="POST" action="crudPosts/edit" enctype="multipart/form-data"> 
                    <div class="form-left">
                        <div class="card">
                            <div class="image-section">
                                <img id="previewEditar" src="<?= $post->img_path?>" alt="Prévia imagem">
                                
                                <!-- Input escondido -->
                                <input class="image-btn" type="file" name="img_path" id="inputEditarImg" accept="image/*">
                                
                                <!-- Botão visível -->
                        
                            </div>
                        </div>
                        <div class="info-text">
                            <p1>Faça uma edição neste post</p1>
                            <p2>Apague ou altere as informações sobre este post</p2>
                        </div>
                    </div>
                    <div class="form-right">
                        <input type="hidden" name="id" value="<?= $post->id ?>">                       
                        <label>Titulo</label>
                        <input required type="text" name="title" value="<?= $post->title ?>">
                        <label>Origem</label>
                        <input required type="text" name="origin" value="<?= $post->origin ?>">
                        <label>História</label>
                        <input required type="text" name="story" value="<?= $post->story ?>">
                        <label>Curiosidades</label>
                        <input required type="text" name="curiosity" value="<?= $post->curiosity ?>">
                        <label>Dicas do Barbeiro</label>
                        <input required type="text" name="tips" value="<?= $post->tips ?>">
                        <label>Produtos recomendados</label>
                        <input required type="text" name="products" value="<?= $post->products ?>">

                        <div class="caixaBarraHorizontal">
                                <div class="barraHorizontal"></div>
                            </div>

                        <div class="save-cancel-btn">
                            <button class="cancel-btn" onclick="fecharModal('editar<?= $post->id ?>')">Cancelar</button>
                            <button type="submit" class="submit-btn-all">Salvar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="excluir-container" id="excluir<?= $post->id ?>">
        <div class="form-box-excluir">
            <h2>Deseja excluir a publicação?</h2>
            <div class="form-excluir">
                <h3>Você tem certeza que deseja excluir essa publicação?</h3>
                <div class="image-section-excluir">
                    <h4><?= $post->title ?></h4>
                    <img src="<?= $post->img_path?>" alt="Prévia imagem">
                </div class="comentario-excluir">
                <p>Essa ação não poderá ser desfeita</p>
            </div>
            <div class="save-cancel-btn-excluir">
                <button class="cancel-btn" onclick="fecharModal('excluir<?= $post->id ?>')">Cancelar</button>
                <form method="POST" action="/crudPosts/delete">
                    <input type="hidden" name="id" value="<?= $post->id ?>">
                    <button class="submit-btn">Excluir</button>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach ?>

          <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../../public/js/adicionar.js"></script>
</body>
</html>
