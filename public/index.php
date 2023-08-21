<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
use Controllers\PagesController;
use Controllers\ProjectsController;
use Controllers\DashboardController;

$router = new Router();

// Paginas
$router->get('/', [PagesController::class, 'index']);
$router->get('/aboutme', [PagesController::class, 'aboutme']);
$router->get('/contact', [PagesController::class, 'contact']);
$router->get('/projects', [PagesController::class, 'projects']);

// Login
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

/*

// Formulario para cuando se olvida la password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);

// Cambiar el password
$router->get('/reestablecer', [LoginController::class, 'reestablecer']);
$router->post('/reestablecer', [LoginController::class, 'reestablecer']);

// Zona de proyectos
$router->get('/dashboard', [DashboardController::class, 'index']);
$router->get('/dashboard/crear-proyecto', [DashboardController::class, 'crear_proyecto']);
$router->post('/dashboard/crear-proyecto', [DashboardController::class, 'crear_proyecto']);
$router->get('/dashboard/proyecto', [DashboardController::class, 'proyecto']);

// API para las projectos
$router->get('/api/tareas', [ProjectsController::class, 'index']);
$router->post('/api/tarea', [ProjectsController::class, 'crear']);
$router->post('/api/tarea/actualizar', [ProjectsController::class, 'actualizar']);
$router->post('/api/tarea/eliminar', [ProjectsController::class, 'eliminar']);
*/

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();