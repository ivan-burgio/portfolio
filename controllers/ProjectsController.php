<?php

namespace Controllers;

use MVC\Router;

class ProjectsController {
    public static function index(Router $router) {

        // Render a la vista
        $router->render('pages/projects', [
            'titulo' => 'Projects',
        ]);
    }
}