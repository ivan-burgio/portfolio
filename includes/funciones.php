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
    $efectos = ['fade-up', 'fade-down'];
    $efecto = array_rand($efectos, 1);
    echo ' data-aos="' . $efectos[$efecto] . '" ';
}

function imprimirEnlace($ruta, $nombre) {
    $clase = ($_SERVER['REQUEST_URI'] === $ruta) ? 'active' : '';
    echo '<a href="' . $ruta . '" class="nav__link ' . $clase . '">' . $nombre . '</a>';
}