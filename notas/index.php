<?php
include 'model/conexion.php';
$sentencia = $bd->query("SELECT * FROM `alumno` al 
                        LEFT JOIN materia m ON al.id_materia= m.id_materia ");
$alumnos = $sentencia->fetchALL(PDO::FETCH_OBJ);

$sentencia = $bd->query("SELECT * FROM materia");
$materia = $sentencia->fetchALL(PDO::FETCH_OBJ);

//echo '<pre>';
//print_r($materia);
//echo '</pre>';

//var_dump($materia);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista de alumnos</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<body>
    <center>
        <h3>LISTA DE ALUMNOS</h3>
        <table  class="table">
            <tr>
                <td>Codigo </td>
                <td>Apellido paterno </td>
                <td>Apellido materno </td>
                <td>Nombre </td>
                <td>parcial </td>
                <td>Final </td>
                <td>materia </td>
                <td>Editar</td>
                <td>Eliminar</td>

            </tr>
            
            <?php

            foreach ($alumnos as $dato) {
            ?>
                <tr>
                    <td><?php echo $dato->id_alumno; ?></td>
                    <td><?php echo $dato->ap_paterno; ?></td>
                    <td><?php echo $dato->ap_materno; ?></td>
                    <td><?php echo $dato->nombre; ?></td>
                    <td><?php echo $dato->ex_parcial; ?></td>
                    <td><?php echo $dato->ex_final; ?></td>
                    <td><?php echo $dato->materia; ?></td>

                    <td><?php ($dato->ex_final + $dato->ex_parcial) / 2; ?></td>
                    <td><a href="editar.php?id=<?php echo $dato->id_alumno;  ?>">Editar</a></td>
                    <td><a href="eliminar.php?id=<?php echo $dato->id_alumno; ?>">Eliminar</a></td>
                </tr>
            <?php
            }

            ?>

        </table>

        <hr>
        <h3>Ingresar alumnos:</h3>
        <form method="POST" action="insertar.php">
            <table>
                <tr>
                    <td>Apellido paterno: </td>
                    <td><input type="text" name="txtPaterno"></td>
                    
                </tr>
                <tr>
                    <td>Apellido materno: </td>
                    <td><input type="text" name="txtMaterno"></td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"></td>
                </tr>
                <tr>
                    <td>Nota parcial: </td>
                    <td><input type="text" name="txtParcial"></td>
                </tr>
                <tr>
                    <td>Nota final: </td>
                    <td><input type="text" name="txtFinal"></td>
                

                </tr>

                <tr>
                    <td>Materia: </td>
                    <td>
                        <select name="id_materia" id="">
                            <?php foreach ($materia as $fila) :?>
                            <option value="<?= $fila->id_materia; ?>"><?= $fila->materia; ?> </option> 
                            <?php endforeach ?>
                                                                                                       
                        </select>
                    </td>
                </tr>

                <input type="hidden" name="oculto" value="1">
                <tr>
                    <td><input type="reset" class="btn btn-primary"></td>
                    <td><button type="submit" class="btn btn-primary">INGRESAR ALUMNO</button></td>
                </tr>
                

            </table>
        </form>
        
    </center>
    

</body>

</html>