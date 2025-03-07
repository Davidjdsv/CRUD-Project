<?php
    include_once("controladores/enrutador.php");
    include_once("controladores/ctr_personas.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Datatable -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
    <title>CRUD</title>
</head>
<body>
    <nav class="container-fluid sticky-top navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <h1 class="navbar-brand">CRUD</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="?cargar=crear">Registrar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="main__container">
        <h1>Página de inicio aprendiendo a desarrollar un crud con modelo, vista, controlador.</h1>
        <hr class="my-4">

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
    <footer class="container-fluid bg-dark text-white py-3 mt-auto">
        <div class="container text-center">
            <p>&copy; 2025 CRUD Application. All rights reserved.</p>
        </div>
    </footer>
    <!-- CDN BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Datatable -->
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script>let table = new DataTable('#myTable');</script>
    <script src="js/script.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>