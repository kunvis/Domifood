<?php
    //print_r($_GET);
    if (!isset($_GET['id'])) {
        //exit();
        header("Location: index.php");
    }

    include '../modelo/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("SELECT * FROM usuarios_dr WHERE id = ?;");
    $sentencia->execute([$id]);
    $cliente = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($cliente);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <center>
        <h2 id="h2">Editar Usuario</h3>
        <form method="POST" action="editar_proceso.php">
            <table>
                <tr>
                    <td>Tipo de documento </td>
                    <td><select name="edit_tipo_documento">
                        <option></option>
                        <option value="Cédula_Extranjera <?php echo $cliente->tipo_documento ?>">Cédula Extranjera</option>
                        <option value="Cédula_de_Ciudadania <?php echo $cliente->tipo_documento ?>">Cédula de Ciudadania</option>
                    </select></td>
                    </tr>
                    <tr>
                        <td>Número de documento </td>
                        <td><input type="text" name="edit_numero_documento" value="<?php echo $cliente->numero_documento ?>"></td>
                    </tr>
                    <tr>
                        <td>Nombre </td>
                        <td><input type="text" name="edit_nombre" value="<?php echo $cliente->nombre ?>"></td>
                    </tr>
                    <tr>
                        <td>Primer Apellido </td>
                        <td><input type="text" name="edit_apellido_1" value="<?php echo $cliente->apellido_1 ?>"></td>
                    </tr>
                    <tr>
                        <td>Segundo Apellido </td>
                        <td><input type="text" name="edit_apellido_2" value="<?php echo $cliente->apellido_2 ?>"></td>
                    </tr>
                    <tr>
                        <td>Comuna </td>
                        <td><select name="edit_comuna">
                            <option value=""></option>
                            <option value="Compartir <?php echo $cliente->comuna ?>">Compartir</option>
                            <option value="Centro <?php echo $cliente->comuna ?>">Centro</option>
                            <option value="La_Despensa <?php echo $cliente->comuna ?>">La Despensa</option>
                            <option value="Cazucá <?php echo $cliente->comuna ?>">Cazucá</option>
                            <option value="San_Mateo <?php echo $cliente->comuna ?>">San Mateo</option>
                            <option value="San_Humberto <?php echo $cliente->comuna ?>">San Humberto</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Télefono </td>
                        <td><input type="text" name="edit_telefono" value="<?php echo $cliente->telefono ?>"></td>
                    </tr>
                    <tr>
                        <td>Dirección </td>
                        <td><input type="text" name="edit_direccion" value="<?php echo $cliente->direccion ?>"></td>
                    </tr>
                    <tr>
                        <td>Correo </td>
                        <td><input type="text" name="edit_correo" value="<?php echo $cliente->correo ?>"></td>
                    </tr>
                    <tr>
                        <td>Contraseña </td>
                        <td><input type="password" name="edit_contraseña" value="<?php echo $cliente->contraseña ?>"></td>
                    </tr>
                    <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="edit_id" value="<?php echo $cliente->id ?>">
                    <br>
                    <td><input type="submit" value="Guardar Cambios" id="cambios"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>