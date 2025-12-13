document.addEventListener("DOMContentLoaded", () => {
    const menu = document.querySelector(".menu");
    const indicator = document.querySelector(".menu-indicator");
    const links = document.querySelectorAll(".menu a");

    function moveIndicator(link) {
        indicator.style.width = `${link.offsetWidth}px`;
        indicator.style.left = `${link.offsetLeft}px`;
    }

    links.forEach(link => {
        if (link.href === window.location.href) {
            links.forEach(l => l.classList.remove("active"));
            link.classList.add("active");
            moveIndicator(link);
        }

        link.addEventListener("click", () => {
            moveIndicator(link);
        });
    });

    // fallback inicial
    const active = document.querySelector(".menu a.active");
    if (active) moveIndicator(active);
});