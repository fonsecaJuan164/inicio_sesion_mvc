<?php
require_once 'modelo/modelo.php';

class Estudiante
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = (new Conexion())->getConexion();
    }

    // Método para registrar un docente
    public function registrar($nombre, $apellido, $idCurso, $idRol, $idEstado,  $edad ,  $sexo ,  $correo ,  $passw ,  $idMesa,  $sNVoto)
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

    // Método para verificar las credenciales del estudiante
    public function verificarCredenciales($correo, $passw) {
        $stmt = $this->conexion->prepare("SELECT passw FROM estudiante WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->bind_result($contrasena_hashed);
        $stmt->fetch();
        return password_verify($passw, $contrasena_hashed);
}



}

    
    
