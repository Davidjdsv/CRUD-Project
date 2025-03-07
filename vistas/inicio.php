<?php
    // Instancia la clase en $controlador
    $controlador = new ControladorPersona();

    // Resultado toma de $controlador, su método index que es el que hace la consulta sql SELECT mostrando datos
    $resultado = $controlador -> index();
?>

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
</main>
