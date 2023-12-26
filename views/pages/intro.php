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
                    'https://www.svgrepo.com/show/331760/sql-database-generic.svg',
                    'SQL'
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
        My latest projects that I did practice are the following.
    </p>

    <div class="main proyects">
        <?php
            proyects_template( // 4ª Proyecto React
                'https://crm-ivanburgio.netlify.app',
                'https://github.com/ivan-burgio/proyecto-crm-vite',
                [
                    'avif' => '/build/img/proyecto_react4.avif',
                    'jpg' => '/build/img/proyecto_react4.png',
                    'webp' => '/build/img/proyecto_react4.webp',
                ],
                'This Project simulates a customer registration site, unlike the previous project, an API is not used to query the information, but rather a "database" with JSON is used, from which you can create, modify and delete the records in it.
    
                Another new feature of this project is that we use React Router DOM for the project structure, making it easier to create and maintain site routes.'
            );

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
        ?>
    </div>
    
    <div data-aos="fade-up" class="intro__moreinfo">
        <p class="intro-txt-center">To see all my projects.</p>
        <a href="/projects" class="btnGeneral">Proyects</a>
    </div>
</main>