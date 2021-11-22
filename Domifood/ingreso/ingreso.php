<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMIFOOD</title>
    <link rel="stylesheet" href="ingreso.css">
</head>
<body>
    <center>
        <header>
            <a href="inicio.php"> <img src="../imagenes/domilogo.png" id="logo" width="450px"></a>
        </header>
        <br>
        <form method="POST" action="../controlador/validacion.php">
            <h2>Iniciar Sesión</h2>
            <label for="email"><h3>Nombre de Usuario</h3></label>
            <input type="text" name="nombre" required>
            <br>
            <label for="contraseña"><h3>Contraseña</h3></label>
            <input type="password" name="clave" required><br><!--pattern="[A-Za-z0-9]+.{6,10}"-->
            <br>
            <input type="reset" id="borra" name="cancelar" value="Cancelar">
            <input type="submit" id="enviar" name="ingreso" value="Iniciar Sesión">
        </form><br>
        <a href="../registrate/registro.php"><button>Registrarse</button></a>
    </center>
    <br>
</body>
    <footer class="footer">
        <h3>Síguenos en</h3>
        <ul><img src="../imagenes/facebook.png" width="35px"> Domifood</ul>
        <ul><img src="../imagenes/instagram.png" width="35px"> Domifood</ul>
        <ul><img src="../imagenes/twitter.png" width="35px"> Domifood</ul>
    </footer>
</html>