<?php

namespace Controllers;

use MVC\Router;

class PagesController {
    public static function index(Router $router) {
        // Render a la vista
        $router->render('pages/intro', [
            'titulo_pestaña' => 'Welcome',
            'titulo_page' => `Welcome to my portfolio!<br><span class="welcome__name">I'm Iván Burgio</span>`,
        ]);
    }

    public static function aboutme(Router $router) {

        // Render a la vista
        $router->render('pages/aboutme', [
            'titulo_pestaña' => 'About me',
            'titulo_page' => 'About me',
        ]);
    }

    public static function contact(Router $router) {

        // Render a la vista
        $router->render('pages/contact', [
            'titulo_pestaña' => 'Contact',
            'titulo_page' => 'Contact',
        ]);
    }

    public static function projects(Router $router) {

        // Render a la vista
        $router->render('pages/projects', [
            'titulo_pestaña' => 'Projects',
            'titulo_page' => 'Projects',
        ]);
    }
}