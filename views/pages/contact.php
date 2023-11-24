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

    <form 
        data-aos="fade-up" 
        class="contact__form" 
        id="formularioCorreo" 
        action='https://formsubmit.co/<?php echo $_ENV['EMAIL_MAIL']; ?>' 
        method="POST"
    >
        <label class="contact__label" for="name">Name</label>
        <input class="contact__form-input" placeholder="Your name" type="text" id="name" name="name" required>
        
        <label class="contact__label" for="mail">Email</label>
        <input class="contact__form-input" placeholder="Your email" type="email" id="mail" name="mail" required>

        <div class="contact__form-mj" id="mensajeTextarea" style="display: none;">
            <label class="contact__label" for="message">Message</label>
            <textarea class="contact__form-area" placeholder="Your message for me" id="message" name="message" rows="4" cols="50" required readOnly></textarea>
        </div>

        <div data-aos="fade-up" class="intro__moreinfo">
            <input class="btnGeneral" id="enviarButton" type="submit" value="Send">
            <input type="hidden" name="_next" value='<?php echo $_ENV['PROYECT_URL']; ?>'>
            <input type="hidden" name="_captcha" value="false">
        </div>
    </form>
</main>