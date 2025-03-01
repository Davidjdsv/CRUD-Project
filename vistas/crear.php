<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
    
    <form action="" method="post">
        <label for="cedula">Cedula</label>
        <input class="form-control form-control-sm" type="text" name="cedula" required id="cedula">
    
        <label for="nombres">Nombres</label>
        <input class="form-control form-control-sm" type="text" name="nombres" required id="nombres">
    
        <label for="apellidos">Apellidos</label>
        <input class="form-control form-control-sm" type="text" name="apellidos" required id="apellidos">
    
        <label for="usuario">Usuario</label>
        <input class="form-control form-control-sm" type="text" name="usuario" required id="usuario">
    
        <label for="clave">Clave</label>
        <input class="form-control form-control-sm" type="text" name="clave" required id="clave">
    
        <input class="btn btn-success" type="submit" name="enviar" value="Registrar">
    </form>
    </div>
    
    <?php

        $controlador = new ControladorPersona();
        if(isset($_POST["enviar"])){
            $res = $controlador -> crear($_POST["cedula"], $_POST["nombres"], $_POST["apellidos"], $_POST["usuario"], $_POST["clave"]);
            echo $res;
        }

        if($res){
            echo "Se ha realizado el registro con éxito!";
        } else {
            echo "ERROR: Falla en realizar el registro";
        }

    ?>
</body>
</html>