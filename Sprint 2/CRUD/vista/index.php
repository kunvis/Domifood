<?php
    include '../modelo/conexion.php';
    $sentencia = $bd->query("SELECT * FROM usuarios_dr;");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    /*fetchAll guardar en formato de objeto 
    FETCH_OBJ sea de tipo objeto*/
    //print_r($usuarios);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista y Registro de Usuarios</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <center>
        <table>
        <strong><h2>Lista de Usuarios</h2></strong>
            <tr id="header">
                <td><strong>id</strong></td>
                <td><strong>tipo de documento</strong></td>
                <td><strong>numero de documento</strong></td>
                <td><strong>nombre</strong></td>
                <td><strong>primer apellido</strong></td>
                <td><strong>segundo apellido</strong></td>
                <td><strong>comuna</strong></td>
                <td><strong>telefono</strong></td>
                <td><strong>direccion</strong></td>
                <td><strong>correo</strong></td>
                <td><strong>contraseña</strong></td>
            </tr>
            <?php
                foreach ($usuarios as $dato) {
                    ?>
                    <tr>
                        <td><?php echo $dato->id; ?></td>
                        <td><?php echo $dato->tipo_documento; ?></td>
                        <td><?php echo $dato->numero_documento; ?></td>
                        <td><?php echo $dato->nombre; ?></td>
                        <td><?php echo $dato->apellido_1; ?></td>
                        <td><?php echo $dato->apellido_2; ?></td>
                        <td><?php echo $dato->comuna; ?></td>
                        <td><?php echo $dato->telefono; ?></td>
                        <td><?php echo $dato->direccion; ?></td>
                        <td><?php echo $dato->correo; ?></td>
                        <td><?php echo $dato->contraseña; ?></td>
                        <td><a href="editar.php?id=<?php echo $dato->id; ?>" id="editar">Editar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $dato->id; ?>" id="eliminar">Eliminar</a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <!-- inicio insert -->
            <hr>
            <form method="POST" action="insertar.php">
            <strong id="form"><h2>Ingresar Datos</h2></strong>
                <table>
                    <tr>
                        <td>Tipo de documento </td>
                        <td><select name="tipo_documento">
                            <option value=""></option>
                            <option value="Cédula_Extranjera">Cédula Extranjera</option>
                            <option value="Cédula_de_Ciudadania">Cédula de Ciudadania</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Número de documento </td>
                        <td><input type="text" name="numero_documento"></td>
                    </tr>
                    <tr>
                        <td>Nombre </td>
                        <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>Primer Apellido </td>
                        <td><input type="text" name="apellido_1"></td>
                    </tr>
                    <tr>
                        <td>Segundo Apellido </td>
                        <td><input type="text" name="apellido_2"></td>
                    </tr>
                    <tr>
                        <td>Comuna </td>
                        <td><select name="comuna">
                            <option value=""></option>
                            <option value="Compartir">Compartir</option>
                            <option value="Centro">Centro</option>
                            <option value="La_Despensa">La Despensa</option>
                            <option value="Cazucá">Cazucá</option>
                            <option value="San_Mateo">San Mateo</option>
                            <option value="San_Humberto">San Humberto</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Télefono </td>
                        <td><input type="text" name="telefono"></td>
                    </tr>
                    <tr>
                        <td>Dirección </td>
                        <td><input type="text" name="direccion"></td>
                    </tr>
                    <tr>
                        <td>Correo </td>
                        <td><input type="text" name="correo"></td>
                    </tr>
                    <tr>
                        <td>Contraseña </td>
                        <td><input type="password" name="contraseña"></td>
                    </tr>
                    <input type="hidden" name="oculto" value="1">
                    <tr>
                        <td><input type="reset" id="reset"></td>
                        <td><input type="submit" value="Registrar Datos" id="enviar"></td>
                    </tr>
                </table>
            </form>
            <br>
            <center>
                <button>
                    <a href="../../vista/inicio.html">Regresar</a>
                </button>
            </center>
        <!-- fin del insert -->
    </center>
</body>
</html>