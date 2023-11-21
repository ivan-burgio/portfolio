document.getElementById('mail').addEventListener('input', function() {
    var mailInput = document.getElementById('mail');
    var mensajeTextarea = document.getElementById('mensajeTextarea');
    var mensajeTextareaInput = document.getElementById('mensaje');

    if (mailInput.value.trim() !== '') {
        mensajeTextarea.style.display = 'flex';
        mensajeTextareaInput.removeAttribute('readOnly');
    } else {
        mensajeTextarea.style.display = 'none';
        mensajeTextareaInput.setAttribute('readOnly', 'readOnly');
    }
});