<?php
$servername = "localhost";
$username = "root";
$password = "";
$database= "proyecto_sena";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection Fallida... Revisar Error: " . $conn->connect_error);
}
echo "<!--Connected Exitosa!...-->";
?>