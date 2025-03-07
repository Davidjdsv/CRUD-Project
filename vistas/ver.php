<?php

    $controlador = new ControladorPersona();

    if(isset($_GET["id"])){
        $registro = $controlador -> ver($_GET["id"]);
    } else {
        header("Location:index.php");
    }

?>

<main class="main__container" data-aos="fade-up" data-aos-duration="1000">
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