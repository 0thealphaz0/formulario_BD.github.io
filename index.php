<?php

    $servidor = "Localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "formulario";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);    

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Base de Datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Formulario</h1>
    <div class="contenedor-form">
        <form action="#" class="Formulario" name="formulario" method="post">
            <label for=""> Nombre: <input type="text" name="nombre" placeholder="nombre">
            </label> <br><br>
            
            <label for="">Apellidos: <input type="text" name="apellidos" placeholder="apellidos">
            </label><br><br>
            
            <label for=""> Telefono: <input type="text" name="telefono" placeholder="telefono">
            </label><br><br>
            
            <input class="boton" type="submit" name="registro">

        </form>
    </div>
    

</body>
</html>

<div class="contenedor-insertar">
    <?php

    if(isset($_POST['registro'])){
        $nombre = $_POST ['nombre'];
        $apellidos = $_POST ['apellidos'];
        $telefono = $_POST ['telefono'];
    }

    $insertarDatos = "INSERT INTO personas VALUES('','$nombre','$apellidos','$telefono')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    ?>
</div>
