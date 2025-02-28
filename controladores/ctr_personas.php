<?php

    include_once("modelos/persona.php");

    class ControladorPersona{
        private $persona;

        public function __construct(){
            $this -> persona = new Persona();
        }
    
        public function index(){
            $resultado = $this -> persona -> listar();
            return $resultado;
        }

        public function ver($id){
            $this -> persona -> set("id", $id);
            return $this -> persona -> ver();
        }

        public function crear($cedula, $nombres, $apellidos, $usuario, $clave){
            $this -> persona -> set("cedula", $cedula);
            $this -> persona -> set("nombres", $nombres);
            $this -> persona -> set("apellidos", $apellidos);
            $this -> persona -> set("usuario", $usuario);
            $this -> persona -> set("clave", $clave);

            $resultado = $this -> persona -> crear();
            return $resultado;

        }
    }
?>