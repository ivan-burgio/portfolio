// import Swiper JS
import Swiper from 'swiper';
// import Swiper styles
import 'swiper/css';
// core version + navigation, pagination modules:
import { Navigation,} from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', function() {
    if(document.querySelector('.swiper')) {
        const opciones = {
            slidesPerView: 1,
            spaceBetween: 15,
            freeMode: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }
        }

        Swiper.use([Navigation])
        new Swiper('.swiper', opciones)
    }
});

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

document.querySelector('.swiper-button-prev').addEventListener('click', () => {
    console.log('si')
})