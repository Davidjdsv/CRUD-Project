<?php

    Class Conexion{
        // Atributos
        private $host;
        private $user;
        private $pass;
        private $bd;
        private $con;

        //Métodos
        public function __construct(){
            $this -> host = "localhost";
            $this -> user = "root";
            $this -> pass = "";
            $this -> bd = "personas";

            $this -> con = mysqli_connect($this -> host, $this -> user, $this -> pass,$this -> bd);
            if (mysqli_errno($this -> con)){
                echo "Falló la conexión a la base de datos: {$this -> bd}";
            } else {
                echo "Conexión exitosa a la base de datos: {$this -> bd}";
            }
        }

        public function consulta_retorno($sql){
            $consulta = mysqli_query($this -> con, $sql);
            return $consulta;
        }

        

    }

    $mi_conexion = new Conexion();

?>