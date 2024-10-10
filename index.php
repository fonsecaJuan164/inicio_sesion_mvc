<?php
require_once 'controlador/controlador_estudiant.php';
// Crear una instancia del controlador
$controlador = new ControladorEstudiante();
// Verificar si se ha especificado una acción en la URL
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'iniciarSesion':
            // Llamar al método que maneja el inicio de sesión
            $controlador->iniciarSesion(
                $_POST['correo'],
                $_POST['passw']
            );
            break;
        case 'registrar':
            // Llamar al método que maneja el registro de un nuevo estudiante
            $controlador->registrarEstudiante(

                $_POST['nombre'],
                $_POST['apellido'],
                $_POST['idCurso'] ?? '8',
                $_POST['idRol'] ?? '4',
                $_POST['sexo'] ?? '0',
                $_POST['edad'],
                $_POST['sexo'] ,
                $_POST['correo']  ,
                $_POST['passw'],
                $_POST['idMesa']  ?? '2',
                $_POST['sNVoto']?? '0'
            );
            break;
        case 'mostrarRegistro':
            // Mostrar el formulario de registro
            $controlador->mostrarRegistro();
            break;
        default:
            // Si la acción no es reconocida, redirigir al formulariode inicio de sesión
            $controlador->mostrarLogin();
            break;
    }
} else {
    // Si no se ha especificado ninguna acción, mostrar el formulario de inicio de sesión por defecto
    $controlador->mostrarLogin();
}



require_once 'controlador/ControladorUsuario.php';

$controlador = new ControladorUsuario();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'crear':
            $controlador->mostrarFormularioCrear();
            break;

        case 'guardar':
            $controlador->crear();
            break;

        case 'editar':
            $controlador->mostrarFormularioEditar($_GET['id']);
            break;

        case 'actualizar':
            $controlador->actualizar($_GET['id']);
            break;

        case 'eliminar':
            $controlador->eliminar($_GET['id']);
            break;

        case 'login':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controlador->login();
           } else {
                $controlador->mostrarFormularioLogin();
            }
            break;

        case 'logout':
            $controlador->logout();
            break;

        default:
            $controlador->listar();
            break;
    }
} else {
    $controlador->listar();
}