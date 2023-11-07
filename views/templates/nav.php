<nav class="nav">
    <!-- Mobile -->
    <div class="nav-container" id="nav-mobile">
        <div class="nav__contenedor-links">
            <div id="toggleNav" class="nav__toggle-image"></div>

            <div id="navLinks" class="nav__links">
                <a href="/" class="nav__contenedor-logo">
                    <div class="nav__logo"></div>
                    <?php nameActivo('/'); ?>
                </a>

                <?php imprimirEnlace('/aboutme', 'About me'); ?>
                <?php imprimirEnlace('/projects', 'Projects'); ?>
                <?php imprimirEnlace('/contact', 'Contact'); ?>
                <?php imprimirEnlace('/login', 'Admin'); ?>
            </div>
        </div>
    </div>

    <!-- Tablet -->
    <div class="nav-container" id="nav-tablet">
        <a href="/" class="nav__contenedor-logo">
            <div class="nav__logo"></div>
            <?php nameActivo('/'); ?>
        </a>

        <div class="nav__contenedor-links">
            <div id="toggleNav" class="nav__toggle-image"></div>

            <div id="navLinks" class="nav__links">
                <div id="navLinks" class="nav__links">
                    <?php imprimirEnlace('/aboutme', 'About me'); ?>
                    <?php imprimirEnlace('/projects', 'Projects'); ?>
                    <?php imprimirEnlace('/contact', 'Contact'); ?>
                    <?php imprimirEnlace('/login', 'Admin'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Desktop -->
    <div class="nav-container" id="nav-desktop">
        <a href="/" class="nav__contenedor-logo">
            <div class="nav__logo"></div>
            <?php nameActivo('/'); ?>
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