const btnStart = document.getElementById("btnStart");
const overlay = document.getElementById("overlay");

btnStart.addEventListener("click", (e) => {
    e.preventDefault(); // Prevenir la redirección predeterminada
    overlay.style.display = "block"; // Mostrar el overlay
    setTimeout(() => {
        overlay.style.opacity = "1"; // Hacer el overlay opaco
        setTimeout(() => {
            window.location.href = btnStart.href; // Redirigir después de que el overlay esté completamente visible
        }, 1000); // Duración del efecto de opacidad (0.5 segundos en este caso)
    }, 10);
});

// Selecciona la imagen de alternancia y el contenedor de enlaces
const toggleImage = document.getElementById('toggleNav');
const navLinks = document.getElementById('navLinks');

// Agrega un manejador de eventos a la imagen
toggleImage.addEventListener('click', () => {
  if (navLinks.style.display === 'none' || navLinks.style.display === '') {
    navLinks.style.display = 'block';
  } else {
    navLinks.style.display = 'none';
  }
});