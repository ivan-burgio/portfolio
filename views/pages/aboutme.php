<main class="main aboutme">
    <div data-aos="fade-up" class="aboutme__i">
        <p class="aboutme__i-info">
            I am passionate about Web Development with a solid background in technology. Currently, I work as a programmer and actively participate in continuing training programs in the technological field. My main goal is to continue growing and constantly improving my programming skills while contributing to the Information Technology (IT) sector.
            <br>
            <br>
            Talking a little more about myself, I really like several areas of programming, although I am leaning towards Web Development currently covering both FrontEnd and BackEnd.
            <br>
            <br>
            I am currently 22 years old, I really like video games, motorcycles, and reading manga.
            <br>
            My career began by studying Computer Engineering at the University, but after a few years I realized that I really didn't like it, so I was inclined to study on my own.
        </p>

        <picture class="aboutme__i-foto">
            <source type="image/avif" srcset="/build/img/yo.avif">
            <source type="image/webp" srcset="/build/img/yo.webp">
            <img class="aboutme__i-foto--img" alt="image of me" src="/build/img/yo.png" loading="lazy">
        </picture>
    </div>

    <div class="container-center">
        <h3 data-aos="fade-up" class="aboutme__career-titule">Career</h3>

        <div class="aboutme__career">
            <div data-aos="fade-up" class="aboutme__career-section">
                <p class="aboutme__career-titules">Experience</p>

                <ul class="aboutme__career-list">
                    <li class="aboutme__career-elem">
                        <div class="aboutme__career-elem--info">
                            <p class="aboutme__career-title">Programmer</p>
                            <i class="aboutme__career-company">ACSA - Real Estate</i>
                            <p class="aboutme__career-duration">Nov. 2023 - present (<?php echo calculateExpDuration("2023-11-07"); ?>)</p>
                            <a class="btnGeneral" href="https://www.acsa.com.uy" target="_blank">Website</a>
                        </div>

                        <p class="aboutme__career-elem--info2">
                            "At ACSA we have more than 60 years of experience in the Uruguayan real estate market. With absolute vocation, we offer comprehensive management for our services.
                            The company is made up of more than 70 employees in constant training dedicated to offering optimal service. From each specialized department, we seek to cover every detail necessary in the process to meet the objectives of the client and the company." - <i>The Company, ACSA</i>
                        </p>
                    </li>
                </ul>
            </div>

            <div data-aos="fade-up" class="aboutme__career-section">
                <p class="aboutme__career-titules">Studies</p>

                <ul class="aboutme__career-list">
                    <li class="aboutme__career-elem">
                        <div class="aboutme__career-elem--info">
                            <p class="aboutme__career-title">Web Developer</p>
                            <i class="aboutme__career-company">Complete Web Development</i>
                            <i class="aboutme__career-company">Udemy Course</i>
                            <p class="aboutme__career-duration">Oct. 2022 - sept. 2023</p>
                            <a class="btnGeneral" href="/build/img/certificado_udemy1.pdf" target="_blank">Certificate</a>
                        </div>

                        <p class="aboutme__career-elem--info2">
                            This course introduces you in detail to Web Programming, addressing 10 key Languages and Technologies. Includes the creation of 8 practical projects. Additionally, it covers essential topics such as account creation, Framework development, authentication from real databases, access recovery, receiving online payments, and database modeling. Provides a solid theoretical and practical foundation in Web Programming. Professor: Juan Pablo de la Torre.
                        </p>
                    </li>

                    <li class="aboutme__career-elem">
                        <div class="aboutme__career-elem--info">
                            <p class="aboutme__career-title">Web Developer</p>
                            <i class="aboutme__career-company">Ceibal - Jovenes a Programar</i>
                            <i class="aboutme__career-company">Level 1</i>
                            <p class="aboutme__career-duration">March 2023 - Nov. 2023</p>
                            <a class="btnGeneral" href="/build/img/certificado_jap.pdf" target="_blank">Certificate</a>
                        </div>

                        <p class="aboutme__career-elem--info2">
                            "Young People to Program (JaP) is a Ceibal program that emerged in 2016 to train and help place young people between 18 and 30 years old from all over the country in the area of information technologies. Through this program In a year you will experience changes at an academic, work and even personal level.

                            JaP offers programming, testing and other technologies courses with the support of CUTI, BID-Lab and the main companies in the sector." - <i>What is JaP?, JaP</i>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-center">
        <h3 data-aos="fade-up" class="aboutme__tech-titule">Tech Stack</h3>

        <div class="aboutme__tech">
            <div data-aos="fade-up" class="aboutme__tech-section">
                <p class="aboutme__tech-titules">FrontEnd</p>
                <ul class="aboutme__tech-list">
                    <?php
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg',
                        'HTML'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg',
                        'CSS'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg',
                        'SASS'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
                        'JavaScript'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg',
                        'Bootstrap'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg',
                        'React'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/redux/redux-original.svg',
                        'Redux'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg',
                        'NextJS'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg',
                        'Tailwind'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gatsby/gatsby-plain.svg',
                        'Gatsby'
                    );
                    ?>
                </ul>
            </div>

            <div data-aos="fade-up" class="aboutme__tech-section">
                <p class="aboutme__tech-titules">BackEnd</p>
                <ul class="aboutme__tech-list">
                    <?php
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                        'PHP'
                    );
                    techs_template(
                        'https://www.svgrepo.com/show/331760/sql-database-generic.svg',
                        'SQL'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg',
                        'MySQL'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg',
                        'NodeJS'
                    );
                    ?>
                </ul>
            </div>

            <div data-aos="fade-up" class="aboutme__tech-section">
                <p class="aboutme__tech-titules">Development Tools</p>
                <ul class="aboutme__tech-list">
                    <?php
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg',
                        'GIT'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg',
                        'GitHub'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gulp/gulp-plain.svg',
                        'GulpJS'
                    );
                    techs_template(
                        'https://raw.githubusercontent.com/webpack/media/master/logo/icon-square-big.png',
                        'WebPack'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/npm/npm-original-wordmark.svg',
                        'NPM'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg',
                        'Composer'
                    );
                    techs_template(
                        'https://www.vectorlogo.zone/logos/getpostman/getpostman-icon.svg',
                        'Postman'
                    );
                    techs_template(
                        'https://openviewpartners.com/wp-content/uploads/2020/12/cypress-io-logo-round_-1.png',
                        'Cypress'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/graphql/graphql-plain.svg',
                        'Graphql'
                    );
                    techs_template(
                        'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg',
                        'Firebase'
                    );
                    ?>
                </ul>
            </div>
        </div>
    </div>
</main>