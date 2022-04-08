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