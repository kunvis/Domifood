<?php
include("conexion.php");
$resultado=2;
$resultado_2=2;
if(isset($_POST['registro'])){
    $tipod=($_REQUEST['tipod']);
    $documento=($_REQUEST['numero_documento']);
    $nombre=($_REQUEST['nombre']);
    $apellido_1=($_REQUEST['apellido_1']);
    $apellido_2=($_REQUEST['apellido_2']);
    $comunas=($_REQUEST['comunas']);
    $telefono=($_REQUEST['telefono']);
    $direccion=($_REQUEST['direccion']);
    $correo=($_REQUEST['correo']);
    $contraseña=($_REQUEST['contraseña']);
    $tipou=($_REQUEST['tipou']);
        if ($_REQUEST['tipou']=='cliente') {
            $consulta="insert into usuarios (tipo_documento,numero_documento,nombre,apellido_1,apellido_2,comuna,telefono,direccion,correo,contraseña,tipo_usuario) 
            values ('$tipod','$documento','$nombre','$apellido_1','$apellido_2','$comunas','$telefono','$direccion','$correo','$contraseña','$tipou')";
            $resultado=mysqli_query($conn,$consulta);
        } elseif ($_REQUEST['tipou']=='administrador') {
            $consulta_2="insert into administrador (tipo_documento,numero_documento,nombre,apellido_1,apellido_2,comuna,telefono,direccion,correo,contraseña,tipo_usuario) 
            values ('$tipod','$documento','$nombre','$apellido_1','$apellido_2','$comunas','$telefono','$direccion','$correo','$contraseña','$tipou')";
            $resultado_2=mysqli_query($conn,$consulta_2);
        }
        
        if($resultado==1){
            die("<strong>Los datos del usuario han sido registrados..!</strong>");   
        }else{
            if($resultado<1){
                die("<strong>Los datos del usuario no se pudieron registrar!.. revisar error</strong>");
            }
        }
        if($resultado_2==1){
            die("<strong>Los datos del administrador han sido registrados..!</strong>");   
        }else{
            if($resultado_2<1){
                die("<strong>Los datos del administrador no se pudieron registrar!.. revisar error</strong>");
            }
        }
}
mysqli_close($conn);
?>
