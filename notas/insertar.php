<?php

//var_dump($_POST);

//die();
if(!isset($_POST['oculto'])){
    exit();
}
include 'model/conexion.php';
$paterno =$_POST['txtPaterno'];
$materno =$_POST['txtMaterno'];
$nombre =$_POST['txtNombre'];
$parcial =$_POST['txtParcial'];
$final =$_POST['txtFinal'];
$id_materia =$_POST['id_materia'];

$sentencia = $bd->prepare("INSERT INTO alumno(ap_paterno,ap_materno,nombre,ex_parcial,ex_final,id_materia) VALUES(?,?,?,?,?,?);");
$resultado = $sentencia->execute([$paterno,$materno,$nombre,$parcial,$final,$id_materia]);

if($resultado === TRUE){
    header('Location: index.php');
    //echo "Insertado correctamente";
}else {
    echo "Ocurrio un problema";
}

?>
