<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/styles.css">
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main class="container-fluid d-flex justify-content-between align-items-center shadow p-8 mb-5 bg-body-tertiary rounded" data-aos="fade-up" data-aos-duration="1000">
        <div class="container-fluid">
            <img src="img/crud.webp" class="rounded float-start" alt="Imagen alusiva a un registro">
        </div>

        <div class="container-fluid d-flex justify-content-center align-items-center">
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
            
                <input class="btn btn-success mb-3 mt-3" type="submit" name="enviar" value="Registrar" id="input_registrar">
            </form>
        </div>
    </main>
    
    
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
    <script src="js/script.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>