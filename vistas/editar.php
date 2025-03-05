<?php

    $controlador = new ControladorPersona();

    if (isset($_GET["id"])){
        $registro = $controlador -> ver($_GET["id"]);
    } else {
        header("Location:index.php");
    }

    if (isset($_POST["editar"])){
        $controlador -> editar($_POST["nombres"],$_POST["apellidos"], $_POST["usuario"], $_POST["clave"]);
        // echo $controlador;
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estás en la sección de editar.</h1>
    
    <form action="" method="post">
        <label for="nombre">Nombres</label>
        <input type="text" name="nombres" required id="nombres">
    
        <label for="apellido">Apellidos</label>
        <input type="text" name="apellidos" required id="apellidos">
    
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" required id="usuario">
    
        <label for="clave">Clave</label>
        <input type="text" name="clave" required id="clave">
    
        <input type="submit" name="editar" value="Actualizar">
    </form>
</body>
</html>
