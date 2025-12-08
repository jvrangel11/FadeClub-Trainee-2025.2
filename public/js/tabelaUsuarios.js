function abrirModal(idModal)
{
      const modal = document.getElementById(idModal);

    if (!modal) {
        console.error("Modal não encontrado:", id);
        return;
    }

    modal.style.display = "flex";
}
function fecharModal(idModal)
{
    const modal = document.getElementById(idModal);

    if (!modal) return;

    modal.style.display = "none";
}

function previewImagem(event, userId) {
    const input = event.target;
    const reader = new FileReader();
    
    reader.onload = function(){
        const imgElement = document.querySelector(`#editar${userId} .imgPerfilB img`);
        imgElement.src = reader.result;
    };
    reader.readAsDataURL(input.files[0]);
}
