<?php
    $contraseña = 'Domifood12345';
    $usuario = 'u991668360_domifood';
    $nombre_bd = 'u991668360_Domifood';

    try {
        $bd = new PDO(
            'mysql:host=localhost;
            dbname='.$nombre_bd,
            $usuario,
            $contraseña,
            /* array para que reconozca todos los caracteres especiales*/
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (Exception $e) {
        echo "Error de conexion".$e->getMessage();
    }

?>