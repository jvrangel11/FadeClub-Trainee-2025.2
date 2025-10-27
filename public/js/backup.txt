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
    totalPages = Math.ceil( (sliderContent.children.length / itemsPerView) - 2*((sliderWidth / itemWidth)/100));

}

// ! Movimentação

function scrollToPage ()
{
    const newPosition = slider.offsetWidth * currentPage;
    sliderContent.scrollTo({ left:newPosition, behavior: 'smooth'});
    resetAutoSlide();
}

function moveLeft()
{
    currentPage--;
    if(currentPage < 0)
    {
        currentPage = totalPages-1;
    }
    scrollToPage();
    resetAutoSlide();
}

function moveRight()
{
    currentPage++;
    if(currentPage >= totalPages)
    {
        currentPage = 0;
    }
    scrollToPage();
    resetAutoSlide();
}

//! Slide automático

function startAutoSlide()
{
    autoSlideInterval = setInterval( () => {
        moveRight();
    }, 4000)
}

function resetAutoSlide()
{
    clearInterval(autoSlideInterval);
    startAutoSlide();
}


//! Eventos 

leftArrow1.addEventListener('click', moveLeft);
leftArrow2.addEventListener('click', moveLeft);
rightArrow1.addEventListener('click', moveRight);
rightArrow2.addEventListener('click', moveRight);
window.addEventListener('resize', updateCarrossel);

//! Chama inicio das funções 

updateCarrossel();
startAutoSlide();