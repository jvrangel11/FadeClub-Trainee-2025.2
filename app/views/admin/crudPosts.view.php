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
            <button class="btn-add" onclick="abrirModal('Criar')">+ Criar Post<i class="fa-solid fa-plus"></i></button>
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
                        <td><?= $post->title ?></td>
                        <td class="img-cell"></td>
                        <td class="acoes">
                            <button><i class="bi bi-eye" onclick="abrirModal('Visualizar')"></i></button> 
                            <button><i class="bi bi-pencil" onclick="abrirModal('editar')"></i></button> 
                            <button><i class="bi bi-trash" onclick="abrirModal('excluir')"></i></button> 
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>   
    <div class="pagination">
        <div>
          <button class="pagination-button-left"> <ion-icon name="caret-forward-outline"></ion-icon> </button>
        </div>

        <div class="pagination-button">
          <button class="pagination-button">1</button>
          <button class="pagination-button">2</button>    
          <button class="pagination-button">3</button>
          <button class="pagination-button">4</button>
          <button class="pagination-button">5</button>
        </div>

        <div>
          <button class="pagination-button-right"><ion-icon name="caret-forward-outline"></ion-icon></button>
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
                                <img id="previewCriar" src="../../../public/assets/imagem-exemplo.jpg" alt="Prévia imagem">

                                <!-- Input escondido -->
                                <input type="file" id="inputCriarImg" accept="image/*" style="display: none;">

                                <!-- Botão visível -->
                                <button class="image-btn" id="btnCriarImg">Selecionar imagem</button>
                            </div>
                        </div>
                        <div class="info-text">
                            <p1>Vamos adicionar um novo post!</p1>
                            <p2>Preencha as informações do post nos campos a seguir</p2>
                        </div>
                    </div>
                    <div class="form-right">
                        <label>Origem*</label>
                        <input type="text">
                        <label>História*</label>
                        <input type="text">
                        <label>Curiosidades*</label>
                        <input type="text">
                        <label>Dicas do Barbeiro*</label>
                        <input type="text">
                        <label>Produtos recomendados*</label>
                        <input type="text">
                        <div class="save-cancel-btn">
                            <button class="cancel-btn" onclick="fecharModal('Criar')">Cancelar</button>
                            <button class="submit-btn-all">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ver-container" id="Visualizar">
        <div class="container-all">
            <div class="form-box">
                <div class="form-view">
                    <div class="form-left">
                        <div class="card">
                            <div class="image-section">
                                <img src="../../../public/assets/imagem-exemplo.jpg" alt="Prévia imagem">
                                <button class="image-btn">Visualizar imagem</button>
                            </div>
                            <div id="modalVerImagem" class="modal-ver-imagem">
                                <span class="fechar-img" id="fecharVerImg">&times;</span>
                                <img id="imgVisualizar" class="conteudo-img">
                            </div>
                        </div>
                        <div class="info-text">
                            <p1>Ver informações deste post</p1>
                            <p2>Apenas visualize quais são as informações sobre este post</p2>
                        </div>
                    </div>
                    <div class="form-right">
                        <label>Origem</label>
                        <input type="text">
                        <label>História</label>
                        <input type="text">
                        <label>Curiosidades</label>
                        <input type="text">
                        <label>Dicas do Barbeiro</label>
                        <input type="text">
                        <label>Produtos recomendados</label>
                        <input type="text">
                        <div class="save-cancel-btn">
                            <button class="cancel-btn" onclick="fecharModal('Visualizar')">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="editar-container" id="editar">
        <div class="container-all">
            <div class="form-box">
                <div class="form-view">
                    <div class="form-left">
                        <div class="card">
                            <div class="image-section">
                                <img id="previewEditar" src="../../../public/assets/imagem-exemplo.jpg" alt="Prévia imagem">

                                <!-- Input escondido -->
                                <input type="file" id="inputEditarImg" accept="image/*" style="display: none;">

                                <!-- Botão visível -->
                                <button class="image-btn" id="btnEditarImg">Alterar imagem</button>
                            </div>
                        </div>
                        <div class="info-text">
                            <p1>Faça uma edição neste post</p1>
                            <p2>Apague ou altere as informações sobre este post</p2>
                        </div>
                    </div>
                    <div class="form-right">
                        <label>Origem</label>
                        <input type="text">
                        <label>História</label>
                        <input type="text">
                        <label>Curiosidades</label>
                        <input type="text">
                        <label>Dicas do Barbeiro</label>
                        <input type="text">
                        <label>Produtos recomendados</label>
                        <input type="text">
                        <div class="save-cancel-btn">
                            <button class="cancel-btn" onclick="fecharModal('editar')">Cancelar</button>
                            <button class="submit-btn-all">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="excluir-container" id="excluir">
        <div class="form-box-excluir">
            <h2>Deseja excluir a publicação?</h2>
            <div class="form-excluir">
                <h3>Você tem certeza que deseja excluir essa publicação?</h3>
                <div class="image-section-excluir">
                    <h4>Título da publicação</h4>
                    <img src="../../../public/assets/arranjo-de-ferramentas-para-barbearia.jpg" alt="Prévia imagem">
                </div class="comentario-excluir">
                <p>Essa ação não poderá ser desfeita</p>
            </div>
            <div class="save-cancel-btn">
                <button class="cancel-btn" onclick="fecharModal('excluir')">Cancelar</button>
                <button class="submit-btn">Excluir</button>
            </div>
        </div>
    </div>
    </div>
          <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../../public/js/adicionar.js"></script>
</body>
</html>
