const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.body.setAttribute('class', 'theme--dark');
        localStorage.setItem('class', 'theme--dark'); //add this
    }
    else {
        document.body.setAttribute('class', 'theme');
        localStorage.setItem('class', 'theme'); //add this
    }    
}
const currentTheme = localStorage.getItem('class') ? localStorage.getItem('class') : null;

if (currentTheme) {
    document.body.setAttribute('class', currentTheme);

    if (currentTheme === 'theme--dark') {
        toggleSwitch.checked = true;
    }
}


toggleSwitch.addEventListener('change', switchTheme, false);