<?php

//var_dump($_POST);

if(!isset($_POST['oculto'])){
    header('Location: index.php');
}

include 'model/conexion.php';
$id2 = $_POST['id2'];
$nombre2 = $_POST['txt2Nombre'];
$paterno2 = $_POST['txt2Paterno'];
$materno2 = $_POST['txt2Materno'];
$ci2 = $_POST['txt2Ci'];
$telefono2 = $_POST['txt2Telefono'];
$id_curso2 = $_POST['txt2id_curso'];

$sentencia = $bd->prepare("UPDATE persona SET nombre = ?, ap_paterno = ?, ap_materno = ?, ci = ?, telefono = ?  WHERE id_curso = ? ");
$resultado = $sentencia->execute([$nombre2,$paterno2,$materno2,$ci2,$telefono2,$id_curso2]);

    //var_dump($resultado);
?>