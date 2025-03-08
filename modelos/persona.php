<?php

    //Incluimos la conexión y la unificamos a la tabla que necesitemos
    include_once("conexion.php");

    // La clase X con los campos de la tabla como están en la bd
    class Persona{
        private $id;
        private $cedula;
        private $nombres;
        private $apellidos;
        private $usuario;
        private $clave;

        // $con instancia la conexión de la clase Conexión
        private $con;

        // Métodos
        public function __construct(){
            $this -> con = new Conexion();
        }

        // RETORNAMOS/DEVOLVEMOS al usuario el ATRIBUTO o CAMPO de la bd
        // ej: Traeme el atributo $nombres de la tabla
        public function get($atributo){
            return $this -> $atributo;
        }

        // Al ATRIBUTO/CAMPO de nuestra TABLA le PONEMOS/AGREGAMOS un CONTENIDO
        // Ej: Al ATRIBUTO $nombres de la tabla X PONLE/AGREGALE este CONTENIDO = "juan" que es un nombre 
        public function set($atributo, $contenido){
            return $this -> $atributo = $contenido;
        }

        // NOTA GENERAL: TODOS los métodos tienen mínimo el $sql y el $resultado
        // $sql: La consulta sql según el método
        // $resultado:

        // LISTAR, VER y CREAR, ejecutan consultas de retorno a traves del método con instanciado, por lo tanto, retornan un resultado

        // Muestra TODOS los datos de x tabla
        public function listar(){
            $sql = "SELECT * FROM personitas";
            $resultado = $this -> con -> consulta_retorno($sql);
            return $resultado;
        }

        // Muestra un dato en especifico y asi ver mas detalles de un solo registro
        public function ver(){
            $sql = "SELECT * FROM personitas WHERE id = {$this -> id}";
            $resultado = $this -> con -> consulta_retorno($sql);
            // $reg toma el resultado y lo mete en un array asociativo
            $reg = mysqli_fetch_assoc($resultado);

            // según la posición de $reg, mete el dato
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
            // $resultado contiene/retorna una consulta con todos los campos de una fila de la tabla
            $filas = mysqli_num_rows($resultado);
            
            // Si no hay nada en las filas, entonces agrega/inserta los datos ue ingrese el usuario
            if($filas == 0){
                $sql = "INSERT INTO personitas (cedula, nombres, apellidos, usuario, clave) VALUES ({$this -> cedula}, '{$this -> nombres}', '{$this -> apellidos}', '{$this -> usuario}', '{$this -> clave}')";
                // El sql de la consulta, con ejecuta su método consulta_simple y retorna true, sino, retorna false
                $this -> con -> consulta_simple($sql);
                return true;
            } else {
                return false;
            }
        }

        // Elimina el id que tome el usuario y ejecuta la consulta simple de con
        public function eliminar(){
            $sql = "DELETE FROM personitas WHERE id = {$this -> id}";

            $this -> con -> consulta_simple($sql);
        }

        // edita el id que tome el usuario y ejecuta la consulta simple de con
        public function editar(){
            $sql = "UPDATE personitas SET nombres = '{$this -> nombres}',
                apellidos = '{$this -> apellidos}',
                usuario = '{$this -> usuario}',
                clave = '{$this -> clave}' WHERE id = {$this -> id}";
            echo $sql;
            $this -> con -> consulta_simple($sql); 
        }
    }

?>