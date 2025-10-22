


function mostrarTexto(idTexto) {

    document.getElementById('FadeLogo').style.display = 'none';

    document.getElementById('texto-missao').style.display = 'none';
    document.getElementById('texto-visao').style.display = 'none';
    document.getElementById('texto-valores').style.display = 'none';


    document.getElementById(idTexto).style.display = 'block';




}

function mostrarLogo() {

    document.getElementById('FadeLogo').style.display = 'block';

    document.getElementById('texto-missao').style.display = 'none';
    document.getElementById('texto-visao').style.display = 'none';
    document.getElementById('texto-valores').style.display = 'none';
}


