<?php

namespace Controllers;

use MVC\Router;

class InicioController {
    public static function inicio(Router $router) {

        // Render a la vista
        $router->render('pages/welcome', [
            'titulo' => 'Welcome',
        ]);
    }
}