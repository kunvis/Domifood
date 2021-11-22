<?php //Proceso actualizacion de datos del usuario
    //print_r($_POST);
    if (!isset($_POST['oculto'])) {
        //exit();
        header("Location: index.php");
    }
    include '../modelo/conexion.php';
    $edit_id = $_POST['edit_id'];
    $edit_tipo_documento = $_POST['edit_tipo_documento'];
    $edit_numero_documento = $_POST['edit_numero_documento'];
    $edit_nombre = $_POST['edit_nombre'];
    $edit_apellido_1 = $_POST['edit_apellido_1'];
    $edit_apellido_2 = $_POST['edit_apellido_2'];
    $edit_comuna = $_POST['edit_comuna'];
    $edit_telefono = $_POST['edit_telefono'];
    $edit_direccion = $_POST['edit_direccion'];
    $edit_correo = $_POST['edit_correo'];
    $edit_contraseña = $_POST['edit_contraseña'];

    $sentencia = $bd->prepare("UPDATE usuarios_dr SET tipo_documento     = ?,
                                                      numero_documento   = ?,
                                                      nombre             = ?,
                                                      apellido_1         = ?,
                                                      apellido_2         = ?,
                                                      comuna             = ?,
                                                      telefono           = ?,
                                                      direccion          = ?,
                                                      correo             = ?,
                                                      contraseña         = ?
                                WHERE id = ?; ");
    $resultado = $sentencia->execute([$edit_tipo_documento,$edit_numero_documento,$edit_nombre,$edit_apellido_1,$edit_apellido_2,
                                    $edit_comuna,$edit_telefono,$edit_direccion,$edit_correo,$edit_contraseña,$edit_id]);
    
    if ($resultado === TRUE) {
        //echo "<strong><h2>Los datos del usuario han sido actualizados exitosamente!!!</h2></strong>";
        header("Location: index.php");
    } else {
        echo "<h2>Ups! ocurrio un error al actualizar los datos del usuario</h2>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización Usuario</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    
</body>
</html>