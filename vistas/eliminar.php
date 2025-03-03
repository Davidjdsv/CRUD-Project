<?php

    $controlador = new ControladorPersona();

    if (isset($_GET["id"])){
        $registro = $controlador -> ver($_GET["id"]);
    } else {
        header("Location:index.php");
    }

    if (isset($_POST["eliminar"])){
        $controlador -> eliminar($_GET["id"]);
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/styles.css">
    <title>Eliminar</title>
</head>
<body>
    <main class="main__container table-responsive" data-aos="fade-up" data-aos-duration="1000">
        <form action="" method="post">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>id</th>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th>Clave</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $registro["id"] ?></td>
                        <td><?php echo $registro["cedula"] ?></td>
                        <td><?php echo $registro["nombres"] ?></td>
                        <td><?php echo $registro["apellidos"] ?></td>
                        <td><?php echo $registro["usuario"] ?></td>
                        <td><?php echo $registro["clave"] ?></td>
                        <td><input class="btn btn-danger" type="submit" name="eliminar" value="Eliminar"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </main>
        <!-- CDN BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
</body>
</html>


