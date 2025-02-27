<?php

    Class Enrutador{
        public function validar_vista($variable){
            if(empty($variable)){
                include_once "vistas/inicio.php";
            } else {
                return true;
            }
        }

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