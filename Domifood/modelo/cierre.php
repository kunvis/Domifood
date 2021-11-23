<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMIFOOD</title>
    <link rel="stylesheet" href="../inicio.css">
</head>
<body>
    <center>
        <header>
            <a href="../inicio.php"><img src="../imagenes/domilogo.png" id="logo" width="450px"></a>
        </header>
    </center>
    <?php
        if (isset($_POST['cierre'])) {
            session_start();
            session_destroy();
            echo "<br>";
            echo "<center><strong><h2>Sesión cerrada...</h2></strong></center>";
            exit();
        }
    ?>
</body>
    <footer class="footer">
        <h3>Síguenos en</h3>
        <ul><img src="imagenes/facebook.png" width="35px"> Domifood</ul>
        <ul><img src="imagenes/instagram.png" width="35px"> Domifood</ul>
        <ul><img src="imagenes/twitter.png" width="35px"> Domifood</ul>
    </footer>
</html>
