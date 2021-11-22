<?php
$servername = "localhost";
$username = "u991668360_domifood";
$password = "Domifood12345";
$database= "u991668360_Domifood";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection Fallida... Revisar Error: " . $conn->connect_error);
}
echo "<!--Connected Exitosa!...-->";
?>