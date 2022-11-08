<?php

if (!isset($_GET['id'])) {
    header('Location: index.php');
}
include 'model/conexion.php';
$id = $_GET['id'];

$sentencia = $bd->prepare("SELECT * FROM alumno WHERE id_alumno = ?; ");
$resultado = $sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($persona);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<body>
    <center>
        <h3>Editar alumno: </h3>
        <form method="POST" action="editarProceso.php">
            <table>
                <tr>
                    <td>Apellido paterno: </td>
                    <td><input type="text" name="txt2Paterno" value=" <?php  echo $persona->ap_paterno; ?>"></td>
                </tr>
                <tr>
                    <td>Apellido materno: </td>
                    <td><input type="text" name="txt2Materno" value=" <?php  echo $persona->ap_materno; ?> "></td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txt2Nombre" value=" <?php  echo $persona->nombre; ?>"></td>
                </tr>
                <tr>
                    <td>Examen Parcial: </td>
                    <td><input type="text" name="txt2Parcial" value=" <?php  echo $persona->ex_parcial; ?>"></td>
                </tr>
                <tr>
                     <td>Examen Final: </td>
                    <td><input type="text" name="txt2Final" value=" <?php  echo $persona->ex_final; ?>"></td>
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

                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $persona->id_alumno; ?>">
                    <td colspan="2"><input type="submit" value="EDITAR ALUMNO"></td>
                    
                </tr>
                
            </table>
              
        </form>
    </center>
</body>
</html>