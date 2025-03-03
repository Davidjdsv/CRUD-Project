<?php
    // Instancia la clase en $controlador
    $controlador = new ControladorPersona();

    // Resultado toma de $controlador, su método index que es el que hace la consulta sql SELECT mostrando datos
    $resultado = $controlador -> index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Datatables -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/styles.css">
    <title>Inicio</title>
</head>
<body>
<main class="main__container table-responsive" data-aos="fade-up" data-aos-duration="1000">
            <table id="myTable" class="table table-hover" >
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th>Clave</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($fila = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            echo "<td>" . $fila["id"] ."</td>";
                            echo "<td>" . $fila["cedula"] ."</td>";
                            echo "<td>" . $fila["nombres"] . "</td>";
                            echo "<td>" . $fila["apellidos"] . "</td>";
                            echo "<td>" . $fila["usuario"] . "</td>";
                            echo "<td>" . $fila["clave"] . "</td>";
                            echo "<td> <a href='?cargar=ver&id=".$fila["id"]."'>Ver</a><a href='?cargar=editar&id=".$fila["id"]."'>Editar</a><a href='?cargar=eliminar&id=".$fila["id"]."'>Eliminar</a>";
                        }
                        ?>
                        
                </tbody>
            </table>
        <!-- CDN BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="scripts/jquery-3.7.1.min.js"></script>
        <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
        <script>let table = new DataTable('#myTable');</script>
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
</body>
</html>