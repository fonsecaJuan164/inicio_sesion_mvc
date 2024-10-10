<?php
require_once 'modelo/Usuario.php';

class ControladorUsuario {
    private $modelo;

    public function __construct() {
        $this->modelo = new Usuario();
    }

    // Mostrar la lista de usuarios (solo administrador)
    public function listar() {
        $this->verificarAccesoAdministrador();
        $usuarios = $this->modelo->obtenerUsuarios();
        require 'vista/usuarios/listar.php';
    }

    // Mostrar formulario de creación
    public function mostrarFormularioCrear() {
        $this->verificarAccesoAdministrador();
        require 'vista/usuarios/crear.php';
    }

    // Procesar la creación de un usuario
    public function crear() {
        $this->verificarAccesoAdministrador();
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $rol_id = $_POST['rol_id'];

        $this->modelo->crearUsuario($nombre, $correo, $contrasena, $rol_id);
        header('Location: index.php');
    }

    // Mostrar formulario de edición
    public function mostrarFormularioEditar($id) {
        $this->verificarAccesoAdministrador();
        $usuario = $this->modelo->obtenerUsuarioPorId($id);
        require 'vista/usuarios/editar.php';
    }

    // Procesar la actualización de un usuario
    public function actualizar($id) {
        $this->verificarAccesoAdministrador();
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $rol_id = $_POST['rol_id'];

        $this->modelo->actualizarUsuario($id, $nombre, $correo, $rol_id);
        header('Location: index.php');
    }

    // Eliminar usuario
    public function eliminar($id) {
        $this->verificarAccesoAdministrador();
        $this->modelo->eliminarUsuario($id);
        header('Location: index.php');
    }

    // Mostrar formulario de login
    public function mostrarFormularioLogin() {
        require 'vista/login.php';
    }

    // Procesar inicio de sesión
    public function login() {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $usuario = $this->modelo->validarLogin($correo, $contrasena);
        
        if ($usuario) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            if($usuario['rol']=='administrador'){header('Location: ./');}
            else {header('Location: index.php?action=editar&id='.$usuario['id']);}
                
        } else {
            header('Location: index.php?action=login&error=1');
        }
    }

    // Procesar cierre de sesión
    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?action=login');
    }

    // Verificar si el usuario es administrador
    private function verificarAccesoAdministrador() {
        session_start();
        if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['rol'] !== 'administrador') {
            header('Location: index.php?action=login');
            exit;
        }
    }
}