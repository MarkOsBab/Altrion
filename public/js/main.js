const toggleSwitch = document.querySelector('.aside__item__switch__label input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.body.setAttribute('class', 'theme--dark');
        document.getElementById('switch-icon').setAttribute('class', 'fa-solid fa-moon');
        localStorage.setItem('class', 'theme--dark'); //add this
        localStorage.setItem('icon', 'fa-solid fa-moon')
    }
    else {
        document.body.setAttribute('class', 'theme');
        document.getElementById('switch-icon').setAttribute('class', 'fa-solid fa-sun');
        localStorage.setItem('class', 'theme'); //add this
        localStorage.setItem('icon', 'fa-solid fa-sun')
    }    
}
const currentTheme = localStorage.getItem('class') ? localStorage.getItem('class') : null;

if (currentTheme) {
    document.body.setAttribute('class', currentTheme);
    document.getElementById('switch-icon').setAttribute('class', 'fa-solid fa-sun');

    if (currentTheme === 'theme--dark') {
        toggleSwitch.checked = true;
        document.getElementById('switch-icon').setAttribute('class', 'fa-solid fa-moon');
    }
}


toggleSwitch.addEventListener('change', switchTheme, false);

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navbar__box");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}
const navLink = document.querySelectorAll(".navbar__box");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}