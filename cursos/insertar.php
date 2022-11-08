<?php

if(!isset($_POST['oculto'])){
    exit();
}
include 'config/conexion.php';
$nombre =$_POST['txtNombre'];
$paterno =$_POST['txtPaterno'];
$materno =$_POST['txtMaterno'];
$ci =$_POST['txtCi'];
$telefono =$_POST['txtTelefono'];
$id_curso =$_POST['id_curso'];

$sentencia = $bd->prepare("INSERT INTO persona(nombre,ap_paterno,ap_materno,ci,telefono,id_curso) VALUES(?,?,?,?,?,?);");
$resultado = $sentencia->execute([$nombre,$paterno,$materno,$ci,$telefono,$id_curso]);

if($resultado === TRUE){
    header('Location: index.php');
    //echo "Insertado correctamente";
}else {
    echo "Ocurrio un problema";
}

?>