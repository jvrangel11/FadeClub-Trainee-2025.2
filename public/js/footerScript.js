


function mostrarTexto(idTexto) {

   
    document.getElementById('fadeLogo').classList.remove('ativo');

    document.getElementById('texto-missao').classList.remove('ativo');
    document.getElementById('texto-visao').classList.remove('ativo');
    document.getElementById('texto-valores').classList.remove('ativo');


    document.getElementById(idTexto).classList.add('ativo');




}

function mostrarLogo() {

    document.getElementById('fadeLogo').classList.add('ativo');
     

    document.getElementById('texto-missao').classList.remove('ativo');
    document.getElementById('texto-visao').classList.remove('ativo');
    document.getElementById('texto-valores').classList.remove('ativo');
}


