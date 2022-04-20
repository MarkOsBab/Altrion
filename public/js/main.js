const toggleSwitch = document.querySelector('.aside__item__switch__label input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.body.setAttribute('class', 'theme--dark');
        document.getElementById('switch-icon').setAttribute('class', 'fa-solid fa-moon');
        document.getElementById('switch-image').setAttribute('src', './public/images/footer/Logo_Light.png');
        localStorage.setItem('class', 'theme--dark'); //add this
        localStorage.setItem('icon', 'fa-solid fa-moon')
    }
    else {
        document.body.setAttribute('class', 'theme');
        document.getElementById('switch-icon').setAttribute('class', 'fa-solid fa-sun');
        document.getElementById('switch-image').setAttribute('src', './public/images/footer/Logo_Dark.png');
        localStorage.setItem('class', 'theme'); //add this
        localStorage.setItem('icon', 'fa-solid fa-sun')
    }    
}
const currentTheme = localStorage.getItem('class') ? localStorage.getItem('class') : null;

if (currentTheme) {
    document.body.setAttribute('class', currentTheme);
    document.getElementById('switch-icon').setAttribute('class', 'fa-solid fa-sun');
    document.getElementById('switch-image').setAttribute('src', './public/images/footer/Logo_Dark.png');

    if (currentTheme === 'theme--dark') {
        toggleSwitch.checked = true;
        document.getElementById('switch-icon').setAttribute('class', 'fa-solid fa-moon');
        document.getElementById('switch-image').setAttribute('src', './public/images/footer/Logo_Light.png');
    }
}


toggleSwitch.addEventListener('change', switchTheme, false);

// Send contact

const formContact = document.querySelector('#formContact');

function listenContact(){
    formContact.addEventListener('submit', readContact);
}

function readContact(r) {
    r.preventDefault();
    const email = document.querySelector('#email').value,
    nombre = document.querySelector('#nombre').value,
    razon = document.querySelector('#razon').value,
    mensaje = document.querySelector('#mensaje').value,
    cAccion = document.querySelector('#cAccion').value;

    if (email === '') {
        alertify.error('Necesitamos un correo electrónico para responder');
    } else if (nombre === ''){
        alertify.error('Necesitamos tu nombre para saber a quien dirigir nuestra respuesta.');
    } else if (razon === ''){
        alertify.error('Necesitamos saber la razón de tu contacto');
    } else if (mensaje === ''){
        alertify.error('Debes escribir un mensaje para ponerte en contacto con nosotros');
    } else {
        const infoContact = new FormData();
        infoContact.append('email', email);
        infoContact.append('nombre', nombre);
        infoContact.append('razon', razon);
        infoContact.append('mensaje', mensaje);
        infoContact.append('cAccion', cAccion);
        if (cAccion === 'send') {
            addContact(infoContact);
        }
    }
}

function addContact(data){
    const xhr = new XMLHttpRequest();
    xhr.open('POST', './classes/class.consults.php?cAccion=doContact', true);
    xhr.onload = function(){
        if (this.status === 200){
            const reply = JSON.parse(xhr.responseText);
            if (reply.reply === 'Mensaje enviado con éxito.') {
                alertify.success('Mensaje enviado con éxito.');
            } else {
                alertify.error('Error al enviar el mensaje.');
            }
            $("#email").val('');
            $("#email").val();
            $("#nombre").val('');
            $("#nombre").val();
            $("#razon").val('');
            $("#razon").val();
            $("#mensaje").val('');
            $("#mensaje").val();
        } else {
            alertify.error('Error al enviar el mensaje.');
        }
    }
    xhr.send(data) // mandamos la conexion y los datos...
}
listenContact();