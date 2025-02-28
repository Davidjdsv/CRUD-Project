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
            $sql = "SELECT * FROM personitas";
            $resultado = $this -> con -> consulta_retorno($sql);
            return $resultado;
        }

        public function ver(){
            $sql = "SELECT * FROM personitas WHERE {$this -> id}";
            $resultado = $this -> con -> consulta_retorno($sql);
            $reg = mysqli_fetch_assoc($resultado);

            $this -> cedula = $reg["cedula"];
            $this -> nombres = $reg["nombres"];
            $this -> apellidos = $reg["apellidos"];
            $this -> usuario = $reg["usuario"];
            $this -> clave = $reg["clave"];

            return $reg;
        }

        public function eliminar(){
            
        }
    }

?>