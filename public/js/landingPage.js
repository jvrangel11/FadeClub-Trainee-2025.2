//! Tranformando elementos HTML em variáveis 
const slider = document.querySelector('.slider');
const sliderContent = document.querySelector('.conteudo');
const leftArrow1 = document.getElementById("seta-esquerda1");
const leftArrow2 = document.getElementById("seta-esquerda2");
const rightArrow1 = document.getElementById("seta-direita1");
const rightArrow2 = document.getElementById("seta-direita2");

//! Declarar variáveis globais 
let currentPage = 0;
let itemsPerView = 1;

let autoSlideInterval;

//! Criação/Organização do Carrossel
function updateCarrossel()
{
    const sliderWidth = slider.offsetWidth;
    const itemWidth = sliderContent.children[0].getBoundingClientRect().width;

    itemsPerView = Math.max(1, Math.floor(sliderWidth / itemWidth));
    totalPages = Math.ceil( (sliderContent.children.length / itemsPerView) -1);

}