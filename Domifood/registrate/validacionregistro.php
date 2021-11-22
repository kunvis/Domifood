<?php
include("conexion.php");
$resultado=2;
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

    $consulta="insert into usuarios_dr (tipo_documento,numero_documento,nombre,apellido_1,apellido_2,comuna,telefono,direccion,correo,contraseña) 
    values ('$tipod','$documento','$nombre','$apellido_1','$apellido_2','$comunas','$telefono','$direccion','$correo','$contraseña')";
    $resultado=mysqli_query($conn,$consulta);
    
        if($resultado==1){
            die("<strong>Los datos del usuario han sido registrados..!</strong>");   
        }else{
            if($resultado<1){
                die("<strong>Los datos del usuario no se pudieron registrar!.. revisar error</strong>");
            }
        }
}
mysqli_close($conn);
?>
