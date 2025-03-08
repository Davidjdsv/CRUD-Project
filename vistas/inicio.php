<?php
    // Instancia la clase en $controlador
    $controlador = new ControladorPersona();

    // Resultado toma de $controlador, su método index que es el que hace la consulta sql SELECT mostrando datos
    $resultado = $controlador -> index();
    // Aquí nos podemos ir al controlador al método INDEX, que a su vez llama al método LISTAR de persona.php
    // LISTAR, a su vez es la CONSULTA SQL la cual lista TODOS los campos actuales de la tabla
    // $resultado está obteniendo todas las filas de los campos de la tabla (ir a línea 28 para continuar explicación)
?>

<main class="main__container table-responsive" data-aos="fade-up" data-aos-duration="1000">
    <!-- Se crea una tabla y se agregan los campos neecesarios según se requieran en la tabla-->
    <table id="myTable" class="table table-hover">
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
            // Como resultado contiene TODOS los campos de la tabla, se desglosan UNO POR UNO en la variable $fila
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
