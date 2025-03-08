<?php

    $controlador = new ControladorPersona();

    if (isset($_GET["id"])){
        // $registro ya contiene un array asociativo.
        $registro = $controlador -> ver($_GET["id"]);
    } else {
        header("Location:index.php");
    }

    if (isset($_POST["editar"])){
        $controlador -> editar($_POST["nombres"],$_POST["apellidos"], $_POST["usuario"], $_POST["clave"]);
        header("Location:index.php");
    }

?>
<h1>Estás en la sección de editar.</h1>

<main class="container-fluid d-flex justify-content-between align-items-center shadow p-8 mb-5 bg-body-tertiary rounded" data-aos="fade-up" data-aos-duration="1000">
    <div class="container-fluid">
        <img src="img/editar_img.png" class="img-fluid rounded float-start" alt="Imagen alusiva a un registro">
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <form action="" method="post" class="w-50">
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" name="id" id="id" class="form-control" value="<?php echo $registro["id"]?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $registro["nombres"]?>">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $registro["apellidos"]?>">
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $registro["usuario"]?>">
            </div>
            <div class="mb-3">
                <label for="clave" class="form-label">Clave</label>
                <input type="text" name="clave" id="clave" class="form-control" value="<?php echo $registro["clave"]?>">
            </div>
            <div class="d-grid">
                <input type="submit" name="editar" value="Actualizar" class="btn btn-warning mb-3 mt-3">
            </div>
        </form>
    </div>
</main>
