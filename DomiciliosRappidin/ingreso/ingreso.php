<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMICILIOS RAPPIDIN</title>
    <link rel="stylesheet" href="ingreso.css">
</head>
<body>
    <header>
        <img src="../imagenes/logo.jpeg" id="logo" width="100px"><a href="/ADSI2142329/portafolio//DomiciliosRappidin/inicio.php">
        <h1>DOMICILIOS RAPPIDIN</h1></a>
    </header>
    <form method="POST" action="../controlador/validacion.php">
        <h2>Ingresar a mi Cuenta</h2>
        <label for="nombre"><h3>Nombre</h3></label>
        <input type="text" name="nombre" style="text-transform:uppercase;" placeholder="usuario" required>
        <br>
        <label for="telefono"><h3>Teléfono</h3></label>
        <input type="text" name="telefono" style="text-transform:uppercase;" placeholder="Contacto" required>
        <br>
        <label for="email"><h3>Correo Electrónico</h3></label>
        <input type="text" name="correo" placeholder="Correo" required>
        <br>
        <label for="contraseña"><h3>Contraseña</h3></label>
        <input type="password" name="clave" placeholder="Clave" pattern="[A-Za-z0-9]+.{6,10}" required>
        <br>
        <ul><a type="reset" id="borrar" href="/ADSI2142329/portafolio//DomiciliosRappidin/ingreso/ingreso.php"><p>Cancelar</p></a></ul>
        <ul><input type="submit" id="enviar" name="ingreso" value="Iniciar Sesión"></ul>
        <ul><a href="/ADSI2142329/portafolio/DomiciliosRappidin/registrate/registro.php">Registrarse</a></ul>
    </form>
    </body>
    <br>
<footer>
    Síguenos en
    <ul><img src="../imagenes/facebook.png" width="25px">DomiciliosRappidin</ul>
    <ul><img src="../imagenes/instagram.png" width="25px">DomiciliosRappidin</ul>
    <ul><img src="../imagenes/twitter.png" width="25px">DomiciliosRappidin</ul>
</footer>
</html>