<nav class="nav">
    <div class="nav-container" id="nav-desktop">
        <a href="/" class="nav__contenedor-logo">
            <div class="nav__logo"></div>
            <p class="nav__name">Ivan Burgio</p>
        </a>

        <div class="nav__contenedor-links">
            <div id="navLinks" class="nav__links">
                <?php imprimirEnlace('/aboutme', 'About me'); ?>
                <?php imprimirEnlace('/projects', 'Projects'); ?>
                <?php imprimirEnlace('/contact', 'Contact'); ?>
                <?php imprimirEnlace('/login', 'Admin'); ?>
            </div>
        </div>
    </div>
</nav>


<!--

<div class="nav-container" id="nav-mobile">
        <div class="nav__contenedor-links">
            <div id="toggleNav" class="nav__toggle-image"></div>

            <div id="navLinks" class="nav__links">
                <a href="/" class="nav__contenedor-logo">
                    <div class="nav__logo"></div>
                    <p class="nav__name">Ivan Burgio</p>
                </a>

                <a href="/aboutme" class="nav__link">About me</a>
                <a href="/projects" class="nav__link">Projects</a>
                <a href="/contact" class="nav__link">Contact</a>
                <a href="/login" class="nav__link">Admin</a>
            </div>
        </div>
    </div>


    <div class="nav-container" id="nav-tablet">
        <a href="/" class="nav__contenedor-logo">
            <div class="nav__logo"></div>
            <p class="nav__name">Ivan Burgio</p>
        </a>

        <div class="nav__contenedor-links">
            <div id="toggleNav" class="nav__toggle-image"></div>

            <div id="navLinks" class="nav__links">
                <a href="/aboutme" class="nav__link">About me</a>
                <a href="/projects" class="nav__link">Projects</a>
                <a href="/contact" class="nav__link">Contact</a>
                <a href="/login" class="nav__link">Admin</a>
            </div>
        </div>
    </div>
-->