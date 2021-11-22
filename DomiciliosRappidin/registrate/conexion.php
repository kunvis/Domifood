<?php
$nombreservidor = "localhost";
$nombreusuario = "root";
$contraseña = "";
$nombrebasedatos= "proyecto_sena";

// Create connection
$conn = mysqli_connect($nombreservidor, $nombreusuario, $contraseña,$nombrebasedatos);

// Check connection
if (!$conn) {
  die("Connection fallida: " .mysqli_connect_error());
}
  echo("conexion exitosa..!");

?>