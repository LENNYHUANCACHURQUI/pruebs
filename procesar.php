<?php

$contrasenia_bd = "15278999";

$usurio_bd = "lenny";

var_dump($_POST);

$usuario =$_POST["usuario"];
$contrasenia =$_POST["contrasenia"];

if($usuario==$usurio_bd && $contrasenia==$contrasenia_bd){
    echo "bienvenido al usuario lenny";
    if(isset($_POST["recordar"])){ //isset para verificar que una variable exista 
        echo "password recordado";
    }
}else{
    echo "passward incorrecto";
}
