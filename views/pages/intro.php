<main class="main intro">
    <div class="intro__welcome">
        <h2 data-aos="fade-down" class="intro__welcome__titule"> Welcome to my portfolio!</h2>
        <h1 data-aos="fade-down" class="intro__welcome__name">I'm Iván Burgio</h1>

        <p data-aos="fade-up" class="intro-txt"> I am passionate about Web Development with a solid background in technology. Currently, I work as a programmer and actively participate in continuing training programs in the technological field. My main goal is to continue growing and constantly improving my programming skills while contributing to the Information Technology (IT) sector.</p>
    </div>

    <p data-aos="fade-up" class="intro-txt-center">
        The main technologies that I use.
    </p>

    <div data-aos="fade-up" class="aboutme__tech-section">
        <ul class="aboutme__tech-list">
            <?php
                techs_template(
                    'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg', 
                    'React'
                );
                techs_template(
                    'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg', 
                    'Bootstrap'
                );
                techs_template(
                    'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg', 
                    'PHP'
                );
                techs_template(
                    'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg', 
                    'MySQL'
                );
                techs_template(
                    'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg', 
                    'GIT'
                );
            ?>
        </ul>
    </div>

    <div data-aos="fade-up" class="intro__moreinfo">
        <p class="intro-txt-center">To see all the technologies I know.</p>
        <a href="/aboutme" class="btnGeneral">About me</a>
    </div>

    <p data-aos="fade-up" class="intro-txt-center">
        My latest projects that I did practice are the following. <br>
        Clicking on the image will take you to the repository.
    </p>

    <div class="main proyects">
        <?php
            proyects_template( // 3ª Proyecto React
                'https://cotizadorcriptos-ivanburgio.netlify.app',
                'https://github.com/ivan-burgio/proyecto-criptos-vite',
                [
                    'avif' => '/build/img/proyecto_react3.avif',
                    'jpg' => '/build/img/proyecto_react3.png',
                    'webp' => '/build/img/proyecto_react3.webp',
                ],
                'This project is a site to quote cryptocurrencies, this is done through an API
                There is data validation.
                The data of the requested cryptocurrencies is loaded at the moment.
                It also has a spinner which is displayed while the query is loaded to the API.
                And what I consider most important is with the creation of our own Hooks.'
            );

            proyects_template( // 2ª Proyecto React
                'https://controlgastos-ivanburgio.netlify.app',
                'https://github.com/ivan-burgio/proyecto-control-gastos-vite',
                [
                    'avif' => '/build/img/proyecto_react2.avif',
                    'png' => '/build/img/proyecto_react2.png',
                    'webp' => '/build/img/proyecto_react2.webp',
                ],
                'This project is a site to keep track of your expenses, you can enter an initial amount and then add different expenses that you have to be able to keep precise control of your money.
                Like all projects, it has field validation.
                You can also edit and delete some expenses and the budget value is updated in real time along with the graph.
                Personally, I consider it very useful to the point that I am going to use it in my daily life.'
            );

            proyects_template( // 1ª Proyecto React
                'https://administradorpacientes-ivanburgio.netlify.app',
                'https://github.com/ivan-burgio/proyecto-administrador-pacientes-vite',
                [
                    'avif' => '/build/img/proyecto_react1.avif',
                    'png' => '/build/img/proyecto_react1.png',
                    'webp' => '/build/img/proyecto_react1.webp',
                ],
                'This project is a simulation of a patient manager in a veterinary clinic.
                What makes this project special is that it has: <br>
                ✅Field validation to ensure that the information entered is correct.
                ✅Data persistence in localstorage to maintain a record of patients.
                ✅Patient editing and deletion functionality, making it a truly useful tool for patient management in a clinic.
                To build this project, I used Vite for the initial files, React for creating the interface, and TailwindCSS to give it a nice look. I also implemented Hooks like useEffect and useState, which are essential in developing React applications.'
            );
        ?>
    </div>
    
    <div data-aos="fade-up" class="intro__moreinfo">
        <p class="intro-txt-center">To see all my projects</p>
        <a href="/projects" class="btnGeneral">Proyects</a>
    </div>

    <div data-aos="fade-up" class="intro__moreinfo">
        <p class="intro-txt-center">If you want to contact me you can do so by different means.</p>
        <a href="/contact" class="btnGeneral">Contact me</a>
    </div>
</main>