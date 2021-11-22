<?php
$nombreservidor = "localhost";
$nombreusuario = "u991668360_domifood";
$contraseña = "Domifood12345";
$nombrebasedatos= "u991668360_Domifood";

// Create connection
$conn = mysqli_connect($nombreservidor, $nombreusuario, $contraseña,$nombrebasedatos);

// Check connection
if (!$conn) {
  die("Connection fallida: " .mysqli_connect_error());
}
  echo("conexion exitosa..!");

?>