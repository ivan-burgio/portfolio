<main class="main contact">
    <div data-aos="flip-up" class="contact__redes">
        <a class="contact__redes-link" href="https://github.com/ivan-burgio" target="_blank">
            <i class="fa-brands fa-github"></i>
        </a>
        <a class="contact__redes-link" href="https://www.linkedin.com/in/ivan-burgio/" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
        </a>
        <a class="contact__redes-link" href="https://www.instagram.com/ivan_burgio/" target="_blank">
            <i class="fa-brands fa-instagram"></i>
        </a>
    </div>

    <form data-aos="fade-up" class="contact__form" id="formularioCorreo">
        <label class="contact__label" for="mail">Email <i class="fa-solid fa-envelope" style="color: #ffffff;"></i></label>
        <input class="contact__form-input" placeholder="Your email" type="email" id="mail" name="mail" required>

        <div class="contact__form-mj" id="mensajeTextarea" style="display: none;">
            <label class="contact__label" for="mensaje">Message <i class="fa-solid fa-keyboard" style="color: #ffffff;"></i></label>
            <textarea class="contact__form-area" placeholder="Your message for me" id="mensaje" name="mensaje" rows="4" cols="50" required readOnly></textarea>
        </div>

        <div data-aos="fade-up" class="intro__moreinfo">
            <input class="btnGeneral" id="enviarButton" type="submit" value="Send">
        </div>
    </form>
</main>