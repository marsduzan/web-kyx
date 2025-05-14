
// Variables y events de carrusel
const left = document.querySelector('#left');
const right = document.querySelector('#right');
const carrusel = document.querySelector('.section-productos');

left.addEventListener("click", () => {
    carrusel.scrollLeft -= 1000;
})

right.addEventListener("click", () => {
    carrusel.scrollLeft += 1000;
})

