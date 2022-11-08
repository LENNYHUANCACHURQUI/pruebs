<?php
include "../cursos/config/conexion.php";


$conexion = new Conexion(); //instanciar la calse conexion

$persona=$conexion->seleccionar_tabla('persona');
$curso=$conexion->seleccionar_tabla('curso');


//echo '<pre>';
//print_r($materia);
//echo '</pre>';

var_dump($persona, $curso);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
</head>
<body>
    <center>
        <h3>REGISTRO</h3>
        <table>
            <tr>
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Apellido paterno</td>
                <td>Apellido materno</td>
                <td>C.i.</td>
                <td>Telefono</td>
            </tr> 
            <?php 

foreach ($persona as $dato) {

?>  

<tr>
                    <td><?php echo $dato->id_persona; ?></td>
                    <td><?php echo $dato->ap_paterno; ?></td>
                    <td><?php echo $dato->ap_materno; ?></td>
                    <td><?php echo $dato->nombre; ?></td>
                    <td><?php echo $dato->ci; ?></td>
                    <td><?php echo $dato->telefono; ?></td>
                    <td><?php echo $dato->estado_persona; ?></td>

                              
                    <td><a href="editar.php?id=<?php echo $dato->id_persona;  ?>">Editar</a></td>
                    <td><a href="eliminar.php?id=<?php echo $dato->id_persona; ?>">Eliminar</a></td>
                </tr>
            <?php
            }

            ?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        </table>
        <table>
        <hr>
        <h3>Ingresar datos:</h3>
        <form method="POST" action="insertar.php">
            <table>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"></td>
                    
                </tr>
                <tr>
                    <td>Apellido paterno: </td>
                    <td><input type="text" name="txtPaterno"></td>
                </tr>
                <tr>
                    <td>Apellido materno: </td>
                    <td><input type="text" name="txtMaterno"></td>
                </tr>
                <tr>
                    <td>ci: </td>
                    <td><input type="text" name="txtCi"></td>
                </tr>
                <tr>
                    <td>telefono: </td>
                    <td><input type="text" name="txtTelefono"></td>
                

                </tr>
                <tr>
                    <td>Curso: </td>
                    <td>
                        <select name="id_curso" id="">
                            <?php foreach ($curso as $fila) :?>
                            <option value="<?= $fila->id_curso; ?>"><?= $fila->curso; ?> </option> 
                            <?php endforeach ?>
                                                                                                       
                        </select>
                    </td>
                </tr>

                <input type="hidden" name="oculto" value="1">
                <tr>
                    <td><input type="reset" class="btn btn-primary"></td>
                    <td><button type="submit" class="btn btn-primary">INGRESAR DATOS</button></td>
                </tr>
                </table>

    </center>
</body>
</html>