<?php
    //print_r($_POST);
    if (!isset($_POST['oculto'])) {
        exit();
    }

    include '../modelo/conexion.php';
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['numero_documento'];
    $nombre = $_POST['nombre'];
    $apellido_1 = $_POST['apellido_1'];
    $apellido_2 = $_POST['apellido_2'];
    $comuna = $_POST['comuna'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $sentencia = $bd->prepare("INSERT INTO usuarios_dr (tipo_documento,numero_documento,nombre,apellido_1,apellido_2,comuna,telefono,direccion,correo,contraseña) VALUES (?,?,?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$tipo_documento,$numero_documento,$nombre,$apellido_1,$apellido_2,$comuna,$telefono,$direccion,$correo,$contraseña]);

    if ($resultado === TRUE) {
        //echo "<strong><h2>Los datos del usuario han sido ingresados exitosamente!!!</h2></strong>";
        header("Location: index.php");
    } else {
        echo "<h2>Ups! ocurrio un error al ingresar los datos del usuario</h2>";
    }
?>