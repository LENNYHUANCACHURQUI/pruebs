<?php

$contador = 0;

while($contador <= 10){
    echo ¨este curso es increible¨¨;
    $contador++;

}

echo "\n";


$usernames = [¨pepito123, ¨mr.michi, ¨retaxmain¨];
do{
    $usernames = readline(¨por favor, ingresa tunombre de usuario: ¨);
    echo "\n";

}while( in_array($username, $usernames)  );

echo "\n";