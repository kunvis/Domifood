<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMIFOOD</title>
    <link rel="stylesheet" href="registros.css">
</head>
<body>
    <a href="../CRUD/vista/index.php"><button>CRUD</button></a>
    <center>
        <header>
            <a href="inicio.php"> <img src="../imagenes/domilogo.png" id="logo" width="450px"></a>
        </header>
        <br>
        <form method="post">
            <h2>Registrarme</h2>
            <div class="uno">
            <label for="tipodoc">Tipo de Documento</label><br>
            <select name="tipod" required>
                <option></option>
                <option value="CC">Cedula de Cuidadania</option>
                <option value="CE">Cedula de Extranjeria</option>
            </select><br>
            <br>
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
            </div>
            <br>
            <div class="tres">
                <input type="submit" id="enviar" name="registro" value="Registro">
                <input type="reset" id="borra" name="cancelar" value="Cancelar">
            </div>
        </form>
        <br>
        <a href="../inicio.php"><button><p>Inicio</p></button></a>
    </center>
    <br>
    <?php
    include ("validacionregistro.php");
    ?><br>
</body>
    <footer class="footer">
        <h3>Síguenos en</h3>
        <ul><img src="../imagenes/facebook.png" width="35px"> Domifood</ul>
        <ul><img src="../imagenes/instagram.png" width="35px"> Domifood</ul>
        <ul><img src="../imagenes/twitter.png" width="35px"> Domifood</ul>
    </footer>
</html>