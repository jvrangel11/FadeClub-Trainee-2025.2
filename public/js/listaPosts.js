const filterButton = document.getElementById('filter-button');
const filterOptions = document.getElementById('filter-options');
const closeButton = document.getElementById('close-button');
const searchButton = document.getElementById('search-button');


filterButton.addEventListener('click', () => {
    filterOptions.classList.toggle('show');
    closeButton.classList.toggle('show');
    if(closeButton.style.display === "none" || closeButton.style.display === ""){
        closeButton.style.display = "flex";
    } else {
        closeButton.style.display = "none";
    }   
});

filterButton.addEventListener('click', () => {
    searchButton.classList.toggle('movido');
});

function searchTag(tag){
    
    let form = getElementById('formTag');
    let input = getElementById('inputTag');
    input.value = tag;
    form.submit();

}