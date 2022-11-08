<?php
//facil

$nombre="damaris"; //string
$apellido="quispe"; //string
$edad="21"; //integer
$aprobado=true; //boolean

echo $nombre;
echo "<br>";
echo $apellido;
echo "\n";
echo $edad;
echo "\n";
echo $aprobado;
echo "\n";

echo "<br>";

//medio

$promedio=(8+9.5+9+10+8)/5; //decimal
$nombre_completo=$nombre." ". $apellido; //string
$presento_examen =(bool) 1; //boolen

echo $promedio;
echo $nombre_completo;
echo $presento_examen;


//avanzado

$numero_preguntas = 5+"5"; //integer
$numero_respuestas = "5" + 5; //integer
$promedio_maximo = $numero_respuestas / 1.0; //decimal
$michis = 3 + "5 michis";


echo $numero_preguntas;
echo $numero_respuestas;
echo $promedio_maximo;
echo $michis;