<?php
    include_once("controladores/enrutador.php");
    include_once("controladores/ctr_personas.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>CRUD</title>
</head>
<body>
    <main class="main__container">
            <nav class="navbar bg-dark border-bottom">
                <h1>CRUD</h1>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="?cargar=crear">Registrar</a></li>
                </ul>
            </nav>
        
        <h2>Página de inicio aprendiendo a desarrollar un crud con modelo, vista, controlador.</h2>

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
    <!-- CDN BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>