<?php

namespace Controllers;

use MVC\Router;

class PagesController {
    public static function index(Router $router) {
        // Render a la vista
        $router->render('pages/welcome', [
            'titulo' => 'Welcome',
        ]);
    }

    public static function intro(Router $router) {
        // Render a la vista
        $router->render('pages/intro', [
            'titulo' => 'Intro',
        ]);
    }

    public static function aboutme(Router $router) {

        // Render a la vista
        $router->render('pages/aboutme', [
            'titulo' => 'About me',
        ]);
    }

    public static function contact(Router $router) {

        // Render a la vista
        $router->render('pages/contact', [
            'titulo' => 'Contact',
        ]);
    }

    public static function projects(Router $router) {

        // Render a la vista
        $router->render('pages/projects', [
            'titulo' => 'Projects',
        ]);
    }
}