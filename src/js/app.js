const btnStart = document.getElementById("btnStart");
const overlay = document.getElementById("overlay");

if (btnStart && overlay) {
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
}

const toggleImage = document.getElementById('toggleNav');
const navLinksMobile = document.getElementById('navLinks-mobile');
const navLinksDesktop = document.getElementById('navLinks-desktop');

if (toggleImage && navLinksMobile && navLinksDesktop) {
    toggleImage.addEventListener('click', () => {
        if (navLinksMobile.style.display === 'none' || navLinksMobile.style.display === '') {
            navLinksMobile.style.display = 'flex';
            navLinksDesktop.style.display = 'none';
        } else {
            navLinksMobile.style.display = 'none';
            navLinksDesktop.style.display = 'flex';
        }
    });
}