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
    <title>DOMIFOOD</title>
    <link rel="stylesheet" href="../vista/estilo/restaurantes.css">
</head>
<body>
    <center>
        <header>
            <a href="restaurantes.php"><img src="../imagenes/domilogo.png" id="logo" width="450px"></a>
        </header>
        <br>
        <h2>Restaurantes</h2>
        <br>
    </center>
    <article class="uno">
        <section class="gato">
            <h3>EL GATO</h3>
            <br>
            <img src="imagenes/gato.jpg" width="250px"><br>
            <br>
            <a href="local_1.html"><button>Ver menú</button></a>
        </section>
        <br>
        <section class="tabla">
            <h3>LA TABLA</h3>
            <br><br><br><br>
            <img src="imagenes/tabla.jpg" width="300px"><br>
            <br><br>
            <a href="local_2.html"><button>Ver menú</button></a>
        </section>
        <br>
        <section class="piolin">
            <h3>EL PIOLIN</h3>
            <br><br><br>
            <img src="imagenes/piolin.JPG" width="250px"><br>
            <br>
            <a href="local_3.html"><button>Ver menú</button></a>
        </section>
        <br>
    </article>
    <br>
    <article class="dos">
        <section class="vikingos">
            <h3>VIKINGOS</h3>
            <br>
            <img src="imagenes/vikingos.JPG" width="250px"><br>
            <br>
            <a href="local_4.html"><button>Ver menú</button></a>
        </section>
        <br>
        <section class="kfc">
            <h3>KFC</h3>
            <br>
            <img src="imagenes/kfc.JPG" width="250px"><br>
            <br>
            <a href="local_5.html"><button>Ver menú</button></a>
        </section>
        <br>
        <section class="tio">
            <h3>EL TIO RICO</h3>
            <br><br><br><br>
            <img src="imagenes/tio.jpg" width="300px"><br>
            <br><br>
            <a href="local_6.html"><button>Ver menú</button></a>
        </section>
    </article>
    <br>
    <center>
        <form method="POST" action="../modelo/cierre.php">
            <input type="submit" name="cierre" value="Cerrar Sesión">
        </form>
    </center>
</body>
    <footer class="footer">
        <h3>Síguenos en</h3>
        <ul><img src="../imagenes/facebook.png" width="25px"> Domifood</ul>
        <ul><img src="../imagenes/instagram.png" width="25px"> Domifood</ul>
        <ul><img src="../imagenes/twitter.png" width="25px"> Domifood</ul>
    </footer>
</html>