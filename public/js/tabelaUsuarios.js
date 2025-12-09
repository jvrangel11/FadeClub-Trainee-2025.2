function abrirModal(idModal)
{
    document.getElementById(idModal).style.display = "flex";
}
function fecharModal(idModal)
{
    document.getElementById(idModal).style.display = "none";
}

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


function previewImagem(event, id) {
    const img = document.getElementById('preview-' + id);
    img.src = URL.createObjectURL(event.target.files[0]);
}
