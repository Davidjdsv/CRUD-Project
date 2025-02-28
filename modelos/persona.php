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

        function crear(){
            $sql2 = "SELECT * FROM personitas WHERE cedula = {$this -> cedula}";
            $resultado = $this -> con -> consulta_retorno($sql2);
            $filas = mysqli_num_rows($resultado);
            
            if($filas == 0){
                $sql = "INSERT INTO personitas (cedula, nombres, apellidos, usuario, clave) VALUES ({$this -> cedula}, '{$this -> nombres}', '{$this -> apellidos}', '{$this -> usuario}', '{$this -> clave}')";
                $this -> con -> consulta_simple($sql);
                return true;
            } else {
                return false;
            }
        }

        public function eliminar(){
            
        }
    }

?>