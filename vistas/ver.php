<?php

    $controlador = new ControladorPersona();

    if(isset($_GET["id"])){
        $registro = $controlador -> ver($_GET["id"]);
    } else {
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
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Ver</title>
</head>
<body>
    <main class="main__container">
        <div class="table__section">
            <table class="table">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                </thead>
                <tbody>
                    <?php
                    
                        echo "<td>" . $registro["id"] . "</td>";
                        echo "<td>" . $registro["cedula"] . "</td>";
                        echo "<td>" . $registro["nombres"] . "</td>";
                        echo "<td>" . $registro["apellidos"] . "</td>";
                        echo "<td>" . $registro["usuario"] . "</td>";
                        echo "<td>" . $registro["clave"] . "</td>";
                    
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <!-- CDN BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>