<?php
    session_start();
    $usuario1=($_SESSION['user']);
    echo "<strong>Bienvenid@...$usuario1</strong>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMICILIOS RAPPIDIN</title>
    <link rel="stylesheet" href="../vista/estilo/restaurantes.css">
</head>
<body>
    <header>
        <img src="imagenes/logo.jpeg" id="logo" width="100px"><a href="/ADSI2142329/portafolio/DomiciliosRappidin/vista/restaurantes.php">
        <h1>DOMICILIOS RAPPIDIN</h1></a>
    </header>
    <h2>Restaurantes</h2>
    <br>
    <article class="uno">
        <section class="gato">
            <h3>EL GATO</h3><br>
            <img src="imagenes/gato.jpg">
            <br><br>
            <p id="clasegato">Más Información <a href="local_1.html">Click aquí</a></p>
        </section>
        <br>
        <section class="tabla">
            <h3>LA TABLA</h3><br>
            <br><br><br>
            <img src="imagenes/tabla.JPG">
            <br><br><br>
            <p id="clasetabla">Más Información <a href="local_2.html">Click aquí</a></p>
        </section>
        <br>
        <section class="piolin">
            <h3>EL PIOLIN</h3><br>
            <img src="imagenes/piolin.JPG">
            <br><br><br>
            <p id="clasepiolin">Más Información <a href="local_3.html">Click aquí</a></p>
        </section>
        <br>
    </article>
    <br>
    <article class="dos">
        <section class="vikingos">
            <h3>VIKINGOS</h3><br>
            <img src="imagenes/vikingos.JPG">
            <br><br>
            <p id="clasevikingos">Más Información <a href="local_4.html">Click aquí</a></p>
        </section>
        <br>
        <section class="kfc">
            <h3>KFC</h3><br>
            <img src="imagenes/kfc.JPG">
            <br><br>
            <p id="clasekfc">Más Información <a href="local_5.html">Click aquí</a></p>
        </section>
        <br>
        <section class="tio">
            <h3>EL TIO RICO</h3><br>
            <br><br><br>
            <img src="imagenes/tio.JPG">
            <br><br>
            <br>
            <p id="clasetio">Más Información <a href="local_6.html">Click aquí</a></p>
        </section>
    </article>
    <br>
    <form method="POST" action="../modelo/cierre.php">
        <input type="submit" name="cierre" value="Cerrar Sesión">
    </form>
    </body>
<footer>
    Síguenos en
    <ul><img src="../imagenes/facebook.png" width="25px">DomiciliosRappidin</ul>
    <ul><img src="../imagenes/instagram.png" width="25px">DomiciliosRappidin</ul>
    <ul><img src="../imagenes/twitter.png" width="25px">DomiciliosRappidin</ul>
</footer>
</html>