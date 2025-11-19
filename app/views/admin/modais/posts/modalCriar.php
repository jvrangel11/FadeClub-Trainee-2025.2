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
                        <form method="POST" action="/crudPosts/create">
                            <label>Título*</label>
                            <input type="text" name="title">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>