<?php

    Class Enrutador{
        // $variable aquí toma el valor de ?cargar que toma el valor de la etiqueta anchor(index.php linea 37)
        public function validar_vista($variable){
            // Si la variable no carga o está vacía, simplemente redirige al inicio o en otras palabras "no hace nada"
            if(empty($variable)){
                include_once "vistas/inicio.php";
            } else {
                // Caso contrario, retorna verdadero, que tomó la variable ?cargar y envía hacía x vista
                return true;
            }
        }

        // Mismo caso, toma la variable ?cargar y según su valor, lo redirige a x sección de la página según el usuario quiera ir o haya dado click a un anchor
        public function cargar_vista($vista){
            echo "La vista a cargar es {$vista}";
            
            switch($vista){
                case 'crear':
                    include_once "vistas/{$vista}.php";
                    break;
                case 'ver':
                    include_once "vistas/{$vista}.php";
                    break;
                case 'editar':
                    include_once "vistas/{$vista}.php";
                    break;
                case 'eliminar':
                    include_once "vistas/{$vista}.php";
                    break;
                default:
                    include_once "vistas/error404.php";
                }
                

        }

    }

?>