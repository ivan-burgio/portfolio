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