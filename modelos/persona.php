<?php

    include_once("conexion.php");

    class Persona{
        private $id;
        private $cedula;
        private $nombres;
        private $apellidos;
        private $usuario;
        private $clave;

        private $con;

        // Métodos
        public function __construct(){
            $this -> con = new Conexion();
        }

        public function get($atributo){
            return $this -> $atributo;
        }

        public function set($atributo, $contenido){
            return $this -> $atributo = $contenido;
        }

        public function listar(){
            $sql = "SELECT * FROM personas";
            $resultado = $this -> con -> consulta_retorno($sql);
            return $resultado;
        }
    }

?>