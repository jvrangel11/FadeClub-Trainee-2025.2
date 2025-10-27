//! Transformar os elementos HTML em variáveis
const slider1 = document.querySelector('.slider1');
const slider2 = document.querySelector('.slider1');
const slider1Content = document.querySelector('.conteudo1');
const slider2Content = document.querySelector('.conteudo2');
const leftArrow1 = document.getElementById("seta-esquerda1")
const leftArrow2 = document.getElementById("seta-esquerda2")
const rightArrow1 = document.getElementById("seta-direita1")
const rightArrow2 = document.getElementById("seta-direita2")

//! Declarar variáveis globais

let currentPage = 0;
let itemsPerView = 1;

//! Criação/Organização do carrossel
function updateCarrossel()
{
    const sliderWidth = slider1.offsetWidth; //guarda o tamanho do slider (só a largura da div, não conta elementos em overflow)
    const itemWidth = slider1Content.children[0].getBoundingClientRect().width; //guarda o tamanho dos cards com base no primeiro filho

    itemsPerView = (sliderWidth / itemWidth);
    totalPages = Math.ceil( (slider1Content.children.length / itemsPerView) - 2*((sliderWidth / itemWidth)/100));
}

//! Movimentação
function scrollToPage(slider , sliderContent) //passa o slider1 ou o slider2 | slider1Content ou 2
{
    const newPosition = slider.offsetWidth * currentPage; //calcula quanto a gnt vai arrastar pro lado
    sliderContent.scrollTo({ left:newPosition, behavior: 'smooth'});
}

function moveLeft(slider , sliderContent)
{
    currentPage--;
    if(currentPage < 0)
    {
        currentPage = totalPages-1;
    }
    scrollToPage(slider , sliderContent);
}

function moveRight(slider , sliderContent)
{
    currentPage++;
    if(currentPage >= totalPages)
    {
        currentPage = 0;
    }
    scrollToPage(slider , sliderContent);
}

//! Eventos
leftArrow1.addEventListener('click', function(){
    moveLeft(slider1 , slider1Content);
});

leftArrow2.addEventListener('click', function(){
    moveLeft(slider2, slider2Content);
});

rightArrow1.addEventListener('click', function(){
    moveRight(slider1, slider1Content);
});

rightArrow2.addEventListener('click', function(){
    moveRight(slider2, slider2Content);
});

window.addEventListener('resize', updateCarrossel);

//! Chamada inicial

updateCarrossel();