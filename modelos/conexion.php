<?php

    Class Conexion{
        // Atributos
        private $host; //El localhost
        private $user; //Usuario del localhost que es "root"
        private $pass; //Contraseña (por defecto sin contraseña)
        private $bd; //La base de datos
        private $con; //Conexión a la base de datos

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
                // echo "Conexión exitosa a la base de datos: {$this -> bd}";
            }
        }

        // Ejecuta consultas que no devuelven resultados, como INSERT, UPDATE o DELETE
        public function consulta_simple($sql){
            mysqli_query($this -> con, $sql);
        }

        // Ejecuta consultas que devuelven resultados, como SELECT
        public function consulta_retorno($sql){
            $consulta = mysqli_query($this -> con, $sql);
            return $consulta;
        }

    }

?>