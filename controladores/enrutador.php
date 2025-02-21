<?php

    Class Enrutador{
        public function validar_vista($variable){
            if(empty($variable)){
                include_once "../vistas/inicio.php";
            } else {
                return true;
            }
        }

        public function cargarVista($vista){
            echo "La vista a cargat es {$vista}";

            switch($vista){
                case "crear":
                    include_once('vistas/' . $vista . '<br>');
                    break;
                case 'ver':
                    include_once('vistas/' . $vista .'<br>');
                    break;
                case 'editar':
                    include_once('vista' . $vista . '<br>');
                    break;
                case 'eliminar':
                    include_once('vistas/' . $vista . '<br>');
                    break;
                default:
                        include_once('vistas/error404.php');
                }
                

        }

    }

?>