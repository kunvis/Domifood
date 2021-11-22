<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMICILIOS RAPPIDIN</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <header>
        <img src="../imagenes/logo.jpeg" id="logo" width="100px"><a href="/ADSI2142329/portafolio/DomiciliosRappidin/inicio.php">
        <h1>DOMICILIOS RAPPIDIN</h1></a>
    </header>
    <form method="post">
		<h2>Registrarme</h2>
        <div class="uno">
        <label for="tipod">Tipo De Documento:</label><br>
        <label for="cedula">CC</laabel>
        <input type="radio" id="cedula" name="tipod" value="cedula_ciudadania" required>
        <label for="cedula">CE</laabel>
        <input type="radio" id="cedula" name="tipod" value="cedula_extranjera" required>
        <br><br>
        <label for="documento">Numero de Documento:</label><br>
        <input type="text" style="text-transform:uppercase;" margin="auto;" pattern=".{7,10}" name="numero_documento" required><br>
        <br>
        <label for="nombre">Nombre:</label><br>
        <input type="text" style="text-transform:uppercase;" name="nombre" required><br>
        <br>
        <label for="nombre">Primer Apellido:</label><br>
        <input type="text" style="text-transform:uppercase;" name="apellido_1" required><br>
        <br>
        <label for="nombre">Segundo Apellido:</label><br>
        <input type="text" style="text-transform:uppercase;" name="apellido_2" required><br>
        <br>
        <label for="comuna">Comuna:</label><br>
        <select name="comunas" required>
            <option></option>
      		<option value="Compartir">Compartir</option>
      		<option value="Centro">Centro</option>
            <option value="San_Mateo">San Mateo</option>
            <option value="San_Humberto">San Humberto</option>
            <option value="La_Despensa">La Despensa</option>
            <option value="Cazuca">Cazuca</option>
        </select><br>
        <br>
        </div>
        <div class="dos">
            <label for="telefono">Telefono:</label><br>
        <input type="text" style="text-transform:uppercase;" pattern=".{10,10}" min="10" max="10" name="telefono" required><br>
        <br>
        <label for="direccion">Direccion:</label><br>
        <input type="text" style="text-transform:uppercase;" name="direccion" required><br>
        <br>
        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" required><br>
        <br>
        <label for="contraseña">Contraseña:</label><br>
        <input type="password" name="contraseña"pattern="[A-Za-z0-9]+.{6,10}"  required><br>
        <br>
        <label for="tipou">Tipo De Usuario:</label><br>
        <label for="cliente">Usuario</label>
        <input type="radio" id="cliente" name="tipou" value="cliente" required>
        <label for="cliente">Administrador</label>
        <input type="radio" id="administra" name="tipou" value="administrador" required><br>
        <br>
        </div>
        <br>
        <div class="tres">
            <a type="reset" id="borrar" href="registro.php"><p>Cancelar</p></a>
            <input type="submit" id="enviar" name="registro" value="Registro">
            <a id="inicio" href="/ADSI2142329/portafolio/DomiciliosRappidin/inicio.php"><p>Inicio</p></a>
        </div>
    </form>
    <br>
    <?php
    include ("validacionregistro.php");
    ?>
</body>
<footer>
    Síguenos en
    <ul><img src="../imagenes/facebook.png" width="25px">DomiciliosRappidin</ul>
    <ul><img src="../imagenes/instagram.png" width="25px">DomiciliosRappidin</ul>
    <ul><img src="../imagenes/twitter.png" width="25px">DomiciliosRappidin</ul>
</footer>
</html>