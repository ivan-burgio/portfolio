const nameInput = document.getElementById('name');
const mailInput = document.getElementById('mail');
const mensajeTextarea = document.getElementById('mensajeTextarea');
const mensajeTextareaInput = document.getElementById('message');
const enviarButton = document.getElementById('enviarButton');

// Evento para el campo de nombre y el campo de correo
nameInput.addEventListener('input', checkShowMessage);
mailInput.addEventListener('input', checkShowMessage);

// Evento para el textarea
mensajeTextareaInput.addEventListener('input', function() {
    if (this.value.length >= 100) {
        enviarButton.style.display = 'flex';
    } else {
        enviarButton.style.display = 'none';
    }
});

// Función para verificar y mostrar la parte del mensaje
function checkShowMessage() {
    if (nameInput.value.trim() !== '' && mailInput.value.includes('@')) {
        mensajeTextarea.style.display = 'flex';
        mensajeTextareaInput.removeAttribute('readOnly');
    } else {
        mensajeTextarea.style.display = 'none';
        mensajeTextareaInput.setAttribute('readOnly', 'readOnly');
    }
}