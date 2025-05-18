// Variables y eventos menus
const sneakk = document.querySelector('.sneakk');
const menuSneak = document.querySelector('.menu-sneak');
const accesorios = document.querySelector('.accesorios');
const menuAcc = document.querySelector('.menu-acc');

let timeoutIdSneak;
let timeoutIdAcc;

function openMenuSneak() {
    clearTimeout(timeoutIdSneak);
    menuSneak.classList.add('active');
}

function closeMenuSneak() {
    timeoutIdSneak = setTimeout(() => {
    if (!sneakk.matches(':hover') && !menuSneak.matches(':hover')) {
        menuSneak.classList.remove('active');
    } 
    }, 200);
}

function openMenuAcc() {
    clearTimeout(timeoutIdAcc);
    menuAcc.classList.add('active');
}

function closeMenuAcc() {
    timeoutIdAcc = setTimeout(() => {
    if (!accesorios.matches(':hover') && !menuAcc.matches(':hover')) {
        menuAcc.classList.remove('active');
    }
    }, 200);
}




sneakk.addEventListener('mouseenter', openMenuSneak);
sneakk.addEventListener('mouseleave', closeMenuSneak);

accesorios.addEventListener('mouseenter', openMenuAcc);
accesorios.addEventListener('mouseleave', closeMenuAcc);

menuAcc.addEventListener('mouseenter', openMenuAcc);
menuAcc.addEventListener('mouseleave', closeMenuAcc);

menuSneak.addEventListener('mouseenter', openMenuSneak);
menuSneak.addEventListener('mouseleave', closeMenuSneak);

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

