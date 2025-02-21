<?php

    $controlador = new ControladorPersona();
    $resultado = $controlador -> index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
<main class="main-container">
        <div class="table-container">
            <h1>Tabla CRUD</h1>
            <ul>
                <li>Inicio</li>
                <li>Registro</li>
            </ul>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th>Clave</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($fila = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            echo "<td>" . $fila["id"] ."</td>";
                            echo "<td>" . $fila["cedula"] ."</td>";
                            echo "<td>" . $fila["nombres"] ."</td>";
                            echo "<td>" . $fila["apellidos"] ."</td>";
                            echo "<td>" . $fila["usuario"] ."</td>";
                            echo "<td>" . $fila["clave"] ."</td>";

                        }
                    ?>
                </tbody>
            </table>
        </div>
</body>
</html>