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
    const btnVerImg = document.querySelector("#Visualizar .image-btn");
    const imgPreviewVer = document.querySelector("#Visualizar .image-section img");

    const modalVerImagem = document.getElementById("modalVerImagem");
    const imagemNoModal = document.getElementById("imgVisualizar");
    const fecharModalImg = document.getElementById("fecharVerImg");

    // Ao clicar em "Visualizar imagem"
    btnVerImg.addEventListener("click", () => {
        imagemNoModal.src = imgPreviewVer.src; // copia a imagem atual
        modalVerImagem.style.display = "block";
    });

    // Fechar botão X
    fecharModalImg.addEventListener("click", () => {
        modalVerImagem.style.display = "none";
    });

    // Fechar clicando fora da imagem
    window.addEventListener("click", (e) => {
        if (e.target === modalVerImagem) {
            modalVerImagem.style.display = "none";
        }
    });

    // --- MODAL EDITAR ---
    const fileInputEditar = document.getElementById("inputEditarImg");
    const btnEditarImg = document.getElementById("btnEditarImg");
    const previewEditar = document.getElementById("previewEditar");

    btnEditarImg.addEventListener("click", () => {
        fileInputEditar.click();
    });

    fileInputEditar.addEventListener("change", () => {
        const file = fileInputEditar.files[0];
        if (file) {
            previewEditar.src = URL.createObjectURL(file);
        }
    });