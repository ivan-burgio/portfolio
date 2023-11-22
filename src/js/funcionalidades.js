const mailInput = document.getElementById('mail');
const mensajeTextarea = document.getElementById('mensajeTextarea');
const mensajeTextareaInput = document.getElementById('mensaje');
const enviarButton = document.getElementById('enviarButton');

document.getElementById('mail').addEventListener('input', function() {
    if (mailInput.value.trim() !== '') {
        // Verifica si el correo contiene "@"
        if (mailInput.value.includes('@')) {
            mensajeTextarea.style.display = 'flex';
            mensajeTextareaInput.removeAttribute('readOnly');
        } else {
            mensajeTextarea.style.display = 'none';
            mensajeTextareaInput.setAttribute('readOnly', 'readOnly');
        }
    } else {
        mensajeTextarea.style.display = 'none';
        mensajeTextareaInput.setAttribute('readOnly', 'readOnly');
    }
});

document.getElementById('mensaje').addEventListener('input', function() {
    if (this.value.length >= 100) {
        enviarButton.style.display = 'flex';
    } else {
        enviarButton.style.display = 'none';
    }
});
