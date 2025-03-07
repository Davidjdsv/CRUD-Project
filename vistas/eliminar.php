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


