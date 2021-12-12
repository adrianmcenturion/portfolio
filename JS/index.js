const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const inicio = document.querySelector('.inicio')

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    inicio.classList.toggle("active")
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    inicio.classList.remove("active")
}



