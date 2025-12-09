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
                    <input readonly type="text">
                    <label>História</label>
                    <input readonly type="text">
                    <label>Curiosidades</label>
                    <input readonly type="text">
                    <label>Dicas do Barbeiro</label>
                    <input readonly type="text">
                    <label>Produtos recomendados</label>
                    <input readonly type="text">
                    <div class="save-cancel-btn">
                        <button class="cancel-btn" onclick="fecharModal('Visualizar')">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>