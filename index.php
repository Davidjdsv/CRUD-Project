<?php
    include_once("controladores/enrutador.php");
    include_once("controladores/ctr_personas.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD</h1>
    <h2>Página de inicio aprendiendo a desarrollar un crud con modelo, vista, controlador.</h2>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="?cargar=crear">Registrar</a></li>
        </ul>
    </nav>

    <main class="main-container">
        <div class="table-container">
            
        </div>

        <section>
        <?php
            $enrutador = new Enrutador();
            if (isset($_GET["cargar"])){
                $cargar = $_GET["cargar"];
            } else {
                $cargar = "";
            }

            if ($enrutador -> validar_vista($cargar)) {
                $enrutador -> cargar_vista($cargar);
            }
        ?>
        </section>

    </main>
</body>
</html>