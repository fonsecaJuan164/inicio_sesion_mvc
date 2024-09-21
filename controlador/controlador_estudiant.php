<?php
require_once 'modelo/Estudiante.php';

class ControladorEstudiante
{
    private $modelo;

    public function __construct()
    {
        // Inicializar el modelo Estudiante
        $this->modelo = new Estudiante();
    }

    // Mostrar la vista del formulario de login
    public function mostrarLogin()
    {
        require 'vista/acme/views/login-v2.php';
    }

    // Manejar el inicio de sesión
    public function iniciarSesion($correo, $contrasena)
    {
        try {
            // Verificar las credenciales del usuario
            if ($this->modelo->verificarCredenciales($correo, $contrasena)) {
                // Iniciar sesión si no está iniciada ya
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                // Guardar el correo en la sesión
                $_SESSION['usuario'] = $correo;

                // Redirigir a la página de bienvenida
                header('Location: ./vista/acme/views/estudiante_perfil.php');
                exit; // Detener ejecución para evitar redirecciones dobles
            } else {
                // Redirigir al formulario de login con un mensaje de error
                echo 'Credenciales incorrectas';
                exit;
            }
        } catch (Exception $e) {
            // Manejar posibles errores de la base de datos u otros
            echo "Error al iniciar sesión: " . $e->getMessage();
        }
    }

    // Mostrar la vista del formulario de registro
    public function mostrarRegistro()
    {
        require 'vista/acme/views/register-v2.php';
    }

    // Manejar el registro de un nuevo estudiante/docente
    public function registrarEstudiante($nombre, $apellido, $idCurso, $idRol, $idEstado,  $edad ,  $sexo ,  $correo ,  $passw ,  $idMesa,  $sNVoto)
    {
        try {
            // Validar que los campos no estén vacíos
            if (empty($nombre) || empty($apellido) || empty($edad) || empty($idRol) || empty($correo) || empty($passw)) {
                echo "Todos los campos son obligatorios.";
                return;
            }

            // Validar que el formato del correo sea correcto
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                echo "Correo electrónico no válido.";
                return;
            }

            // Registrar el estudiante en la base de datos
            if ($this->modelo->registrar($nombre, $apellido, $idCurso, $idRol, $idEstado,  $edad ,  $sexo ,  $correo ,  $passw ,  $idMesa,  $sNVoto)) {
                // Redirigir a la página de bienvenida
                header('Location: vista/acme/views/register_ok-v2.php');
            } else {
                echo "Error al registrar.";
            }
            
        } catch (Exception $e) {
            // Manejar posibles errores
            echo "Error al registrar: " . $e->getMessage();
        }
    }
    
}
