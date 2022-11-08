<?php

$contrasena = '';
$usuario = 'root';
$nombrebd = 'nota';

try {
    $bd = new PDO(
        'mysql:host=localhost;
        dbname=' . $nombrebd,
        $usuario,
        $contrasena
    );
} catch (exception $e) {
    echo "Error de conexion" . $e->getMessage();
}

class Conexion
{
    private $contrasena = '';
    private $usuario = 'root';
    private $nombrebd = 'nota';
    private $bd;

    function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname=' . $this->nombrebd, $this->usuario, $this->contrasena);
        } catch (exception $e) {
            echo "Error de conexion" . $e->getMessage();
        }
    }

    public function conectar()
    {
        return $this->bd;
    }

    public function seleccionar_tabla($nombre_tabla)
    {
        $sentencia = $this->bd->query("SELECT * FROM $nombre_tabla");
        $consulta = $sentencia->fetchALL(PDO::FETCH_OBJ);
        return $consulta;
    }
    // public function set_contrasenia($contrasenia){
    //    $this->contrasenia=$contrasenia;
    //}

    //public function get_contrasenia(){
    // return $this->contrasenia;
    //}

}
