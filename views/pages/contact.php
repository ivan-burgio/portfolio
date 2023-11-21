<main class="main contact">
    <div class="contact__redes">
        <a class="contact__redes-link" href="https://github.com/ivan-burgio">
            <i class="fa-brands fa-github" style="color: #000000"></i>
        </a>
        <a class="contact__redes-link" href="https://www.linkedin.com/in/ivan-burgio/">
            <i class="fa-brands fa-linkedin" style="color: #000000"></i>
        </a>
        <a class="contact__redes-link" href="https://www.instagram.com/ivan_burgio/">
            <i class="fa-brands fa-instagram" style="color: #000000"></i>
        </a>
    </div>

    <form class="contact__form" id="formularioCorreo">
        <label class="contact__label" for="mail">Mail</label>
        <input class="contact__form-input" type="email" id="mail" name="mail" required>

        <div class="contact__form-mj" id="mensajeTextarea" style="display: none;">
            <label class="contact__label" for="mensaje">Message</label>
            <textarea class="contact__form-area" id="mensaje" name="mensaje" rows="4" cols="50" required readOnly></textarea>
        </div>

        <div data-aos="fade-up" class="intro__moreinfo">
            <input class="btnGeneral" type="submit" value="Send">
        </div>
    </form>
</main>