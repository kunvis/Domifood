<?php
    include ("../modelo/conexion2.php");
    session_start();
    //asignar las variables del formuclario
    $nombre=($_REQUEST['nombre']);
    $telefono=($_REQUEST['telefono']);
    $correo=($_REQUEST['correo']);
    $clave=($_REQUEST['clave']);
    //consulta
    $sql="SELECT COUNT(*) as contar from usuarios where nombre='$nombre' and telefono='$telefono' and correo='$correo' and contraseña='$clave'";
    $consulta=mysqli_query($conn,$sql);

    $lista=mysqli_fetch_array($consulta);
    if ($lista['contar']>0) {
        $_SESSION['user']=$nombre;
        header("location:../vista/restaurantes.php");
        //die("Registro Encontrado");
    }else {
        die("Usuario y/o contraseña no registrada... Verificar");
    }
?>