function abrirModal(idModal) {
    document.getElementById(idModal).style.display = "flex";
}

function fecharModal(idModal) {
    document.getElementById(idModal).style.display = "none";
}

    // --- MODAL CRIAR ---
    const fileInputCriar = document.getElementById("inputCriarImg");
    const btnCriarImg = document.getElementById("btnCriarImg");
    const previewCriar = document.getElementById("previewCriar");

    btnCriarImg.addEventListener("click", () => {
        fileInputCriar.click();
    });

    fileInputCriar.addEventListener("change", () => {
        const file = fileInputCriar.files[0];
        if (file) {
            previewCriar.src = URL.createObjectURL(file);
        }
    });

    // --- MODAL VISUALIZAR ---
    // ELEMENTOS
    function abrirModalImagem(postId) {
    const modal = document.getElementById('modalVerImagem' + postId);
    const imgPrevia = document.getElementById('imgPrevia' + postId);
    const imgVisualizar = document.getElementById('imgVisualizar' + postId);
    
    // Copia o src da imagem prévia para o modal
    imgVisualizar.src = imgPrevia.src;
    
    // Exibe o modal
    modal.style.display = 'block';
}

// Função para fechar o modal da imagem
function fecharModalImagem(postId) {
    const modal = document.getElementById('modalVerImagem' + postId);
    modal.style.display = 'none';
}

// Fechar modal clicando fora da imagem
window.onclick = function(event) {
    if (event.target.classList.contains('modal-ver-imagem')) {
        event.target.style.display = 'none';
    }
}

    // --- MODAL EDITAR ---
    