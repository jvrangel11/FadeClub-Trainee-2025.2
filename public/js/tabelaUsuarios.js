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
