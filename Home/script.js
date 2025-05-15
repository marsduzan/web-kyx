const sneakk = document.querySelector('.sneakk');
const menuSneak = document.querySelector('.menu-sneak');

let timeoutId;

function openMenu() {
    clearTimeout(timeoutId);
    menuSneak.classList.add('active');
}

function closeMenu() {
    timeoutId = setTimeout(() => {
    if (!sneakk.matches(':hover') && !menuSneak.matches(':hover')) {
        menuSneak.classList.remove('active');
    }
    }, 200);
}

sneakk.addEventListener('mouseenter', openMenu);
sneakk.addEventListener('mouseleave', closeMenu);

menuSneak.addEventListener('mouseenter', openMenu);
menuSneak.addEventListener('mouseleave', closeMenu);

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

