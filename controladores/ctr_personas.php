<?php

    include_once("../modelos/persona.php");

    class ControladorPersona{
        private $persona;

        public function __construct(){
            $this -> persona = new Persona();
        }
    
        public function index(){
            $resultado = $this -> persona -> listar();//Todavía no se ha hecho la función listar.
            return $this -> $resultado;
        }
    }


    $persona = new Persona();
?>