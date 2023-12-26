<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Función que revisa que el usuario este autenticado
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function aos_animacion() : void {
    $efectos = ['flip-left', 'flip-right', 'flip-up', 'flip-down'];
    $efecto = array_rand($efectos, 1);
    
    $tiempos = ['500', '750', '1000', '1250', '1500',];
    $tiempo = array_rand($tiempos, 1);

    echo ' data-aos="' . $efectos[$efecto] . '" data-aos-duration="' . $tiempos[$tiempo] .'" ';
}

function imprimirEnlace($ruta, $nombre) {
    $clase = ($_SERVER['REQUEST_URI'] === $ruta) ? 'active' : '';
    echo '<a href="' . $ruta . '" class="nav__link ' . $clase . '">' . $nombre . '</a>';
}

function nameActivo($ruta) {
    $clase = ($_SERVER['REQUEST_URI'] === $ruta) ? 'active' : '';
    echo '<p class="nav__name ' . $clase .'">Ivan Burgio</p>';
}

function agregarBrDespuesDePunto($texto) {
    // Reemplaza los puntos con punto y salto de línea
    $textoConBr = str_replace('.', '.<br>', $texto);
    return $textoConBr;
}

function proyects_template($linkDeploy, $linkRepo, $imgFormats, $txt) {
    echo '
    <div data-aos="fade-up" class="proyects-proyect">
        <div class="proyects-proyect-img">';

    echo '<picture>';

    foreach ($imgFormats as $format => $src) {
        echo '
            <source srcset="' . $src . '" type="image/' . $format . '">';
    }

    echo '
            <img src="' . $imgFormats['png'] . '" alt="' . htmlspecialchars($linkRepo) . '" loading="lazy">
        </picture>

        </div>
        <p class="proyects-proyect-info">
            ' . agregarBrDespuesDePunto($txt) . '
        </p>
    </div>

    <div data-aos="fade-up" class="proyects-proyect__botones">';
    
    if($linkDeploy) {
        echo '<a href="' . $linkDeploy . '" class="btnGeneral" target="_blank">Deployment</a>';
    } else {
        echo '<a class="btnGeneral--disabled" target="_blank">Deployment</a>';
    }

    echo '
        <a href="' . $linkRepo . '" class="btnGeneral" target="_blank">Repository</a>
    </div>
    ';
}

function techs_template($img, $nombre) {
    echo '
        <li data-aos="flip-up" class="aboutme__tech-element">
            <p class="aboutme__tech-name">' . $nombre .'</p>
            <img 
                src="' . $img .'" 
                class="aboutme__tech-logo"
                alt="logo ' . $nombre .'"
                loading="lazy"
            ></img>
        </li>
    ';
}

function calculateExpDuration($startDate) {
    $startTimestamp = strtotime($startDate);
    $currentTimestamp = time();

    $diff = $currentTimestamp - $startTimestamp;
    $months = floor($diff / (30 * 24 * 60 * 60)); // Asumiendo un mes de 30 días

    return $months . " months";
}