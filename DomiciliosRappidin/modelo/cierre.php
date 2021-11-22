<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMICILIOS RAPPIDIN</title>
    <link rel="stylesheet" href="../inicio.css">
</head>
<body>
    <header>
        <img src="../imagenes/logo.jpeg" id="logo" width="100px"><a href="/ADSI2142329/portafolio/DomiciliosRappidin/inicio.php">
            <h1>DOMICILIOS RAPPIDIN</h1></a>
    </header>
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
</html>
