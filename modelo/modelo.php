<?php
class Conexion
{
    private $conexion;

    public function __construct()
    {
        $config = require_once 'config/config.php';

        try {
            $this->conexion = new mysqli(
                $config['host'],
                $config['usuario'],
                $config['contrasena'],
                $config['base_de_datos']
            );

            if ($this->conexion->connect_error) {
                throw new Exception("Conexión fallida: " . $this->conexion->connect_error);
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getConexion()
    {
        return $this->conexion;
    }

    public function cerrarConexion()
    {
        $this->conexion->close();
    }
}
