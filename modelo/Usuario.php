<?php
require_once 'Conexion.php';

class Usuario {
    private $conexion;

    public function __construct() {
        $this->conexion = (new Conexion())->getConexion();
    }

    // Crear nuevo usuario
    public function crearUsuario($nombre, $apellido, $idCurso, $idRol, $idEstado,  $edad ,  $sexo ,  $correo ,  $passw ,  $idMesa,  $sNVoto)
    {
        // Hashear la contraseña y guardarla en la columna 'passw'
        $contrasena_hashed = password_hash($passw, PASSWORD_DEFAULT);

        //Colocar valores a cambos que son FK en la tabla estudiante de la bd
        $idCurso = 8;   //  de idCurso
        $idRol = 0;     //  de idRol
        $idEstado = 1;  //  de idEstado
        $idMesa = 2;    //  de idMesa
        $sNVoto = 0;    //  de sNVoto  

        // Preparar la consulta para insertar los datos del docente
        $stmt = $this->conexion->prepare("INSERT INTO  estudiante  (nombre, apellido, idCurso, idRol, idEstado,  edad ,  sexo ,  correo ,  passw ,  idMesa,  sNVoto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiiissssii", $nombre, $apellido, $idCurso, $idRol, $idEstado,  $edad ,  $sexo,  $correo,  $contrasena_hashed, $idMesa, $sNVoto);

        // Ejecutar la consulta
        return $stmt->execute();
    
    }

    // Obtener todos los usuarios
    public function obtenerUsuarios() {
        $resultado = $this->conexion->query("SELECT u.id, u.nombre, u.correo, r.rol FROM usuarios u JOIN roles r ON u.rol_id = r.id");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    // Obtener usuario por ID
    public function obtenerUsuarioPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Actualizar usuario
    public function actualizarUsuario($id, $nombre, $correo, $rol_id) {
        $stmt = $this->conexion->prepare("UPDATE usuarios SET nombre = ?, correo = ?, rol_id = ? WHERE id = ?");
        $stmt->bind_param("ssii", $nombre, $correo, $rol_id, $id);
        return $stmt->execute();
    }

    // Actualizar datos de destudiante 
    public function actualizarEstudiante($nombre, $apellido, $idCurso, $idRol, $idEstado,  $edad ,  $sexo, $idEstudiante) {
        $stmt = $this->conexion->prepare("UPDATE estudiante SET nombre = ?, apellido = ?, idCurso = ?, idRol = ?, idEstado = ?, edad = ?, sexo =?,  WHERE id = ?");
        $stmt->bind_param("ssiiissssii", $nombre, $apellido, $idCurso, $idRol, $idEstado,  $edad ,  $sexo,  $correo, $idEstudiante);
        return $stmt->execute();
    }
    

    // Eliminar usuario
    public function eliminarUsuario($id) {
        $stmt = $this->conexion->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    // Eliminar estudiante
    public function eliminarEstudiante($idEstudiante) {
        $stmt = $this->conexion->prepare("DELETE FROM estudiante WHERE idEstudiante = ?");
        $stmt->bind_param("i", $idEstudiante);
        return $stmt->execute();
    }

    // Validar inicio de sesión
    public function validarLogin($correo, $contrasena) {
        $stmt = $this->conexion->prepare("SELECT u.id, u.nombre, u.contrasena, r.rol FROM usuarios u JOIN roles r ON u.rol_id = r.id WHERE u.correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $usuario = $stmt->get_result()->fetch_assoc();
        if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
            return $usuario;
        }
        return false;
    }
}