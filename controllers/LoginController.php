<?php

namespace Controllers;

use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        $alertas =[];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario($_POST);
            $alertas = $usuario->validarLogin();

            if(empty($alertas)) {
                // Verificar si el usuario existe
                $usuario = Usuario::where('email', $usuario->email);

                if(!$usuario) {
                    Usuario::setAlerta('error', 'El usuario no existe');
                } elseif($usuario->confirmado === "0") {
                    Usuario::setAlerta('error', 'El usuario no esta confirmado');
                } else {
                    // El usuario existe
                    if(password_verify($_POST['password'], $usuario->password)) {
                        // Iniciar sesión
                        session_start();
                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['login'] = true;

                        // Redireccionar
                        header('Location: /dashboard');
                    } else {
                        Usuario::setAlerta('error', 'La contraseña es incorrecta');
                    }
                }
            }
        }

        $alertas = Usuario::getAlertas();

        // Render a la vista
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas' => $alertas
        ]);

    }

    public static function logout() {
        session_start();
        $_SESSION = [];
        header('Location: /');
    }

    public static function olvide(Router $router) {
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario($_POST);
            $alertas = $usuario->validarEmail();

            if(empty($alertas)) {
                // Buscar el usuario
                $usuario = Usuario::where('email', $usuario->email);

                if($usuario && $usuario->confirmado === "1") {
                    // Generar un token
                    $usuario->crearToken();
                    unset($usuario->password2);

                    // Actualizar el usuario
                    $usuario->guardar();

                    // Enviar el email
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                    $email->enviarInstrucciones();

                    // Imprimir la alerta
                    Usuario::setAlerta('exito', 'Hemos enviado las instrucciones a tu email');

                } elseif(!$usuario) {
                    Usuario::setAlerta('error', 'El usuario no existe');
                } elseif($usuario->confirmado === "0") {
                    Usuario::setAlerta('error', 'El usuario no esta confirmado');
                }
            }
        }

        $alertas = Usuario::getAlertas();
        
        // Render a la vista
        $router->render('auth/olvide', [
            'titulo' => 'Olvide mi Contraseña',
            'alertas' => $alertas
        ]);
        
    }

    public static function reestablecer(Router $router) {
        $token = s($_GET['token']);
        $mostrar = true;
        if(!$token) header('Location: /');

        //Identificar el usuario con el token
        $usuario = Usuario::where('token', $token);

        if(empty($usuario)) {
            Usuario::setAlerta('error', 'Token no Valido');
            $mostrar = false;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Añadir el nuevo password
            $usuario->sincronizar($_POST);

            // Validar el password
            $alertas = $usuario->validarPassword();

            if(empty($alertas)) {
                // Hashear el password
                $usuario->hashPassword();
                unset($usuario->password2);

                // Eliminar el token
                $usuario->token = null;

                // Guardar la nueva password
                $resultado = $usuario->guardar();

                // Redireccionar
                if($resultado) {
                    header('Location: /');
                }
            }
        }

        $alertas = Usuario::getAlertas();

        // Render a la vista
        $router->render('auth/reestablecer', [
            'titulo' => 'Reestablecer Contraseña',
            'alertas' => $alertas,
            'mostrar' => $mostrar
        ]);
    }
}