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
    <title>Ver</title>
</head>
<body>
    <main>
        <div class="table__section">
            <table>
                <thead>
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
</body>
</html>