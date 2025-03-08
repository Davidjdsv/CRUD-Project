<?php
    // Llama al modelo de persona.php
    include_once("modelos/persona.php");

    class ControladorPersona{
        private $persona;

        // Instancia de Persona() en persona para poder usar sus métodos encapsulados
        public function __construct(){
            $this -> persona = new Persona();
        }
        
        // persona ejecuta el método listar que es el que muestra todos los datos actuales de la tabla
        public function index(){
            $resultado = $this -> persona -> listar();
            return $resultado;
        }

        //NOTA GENERAL: Lo mismo. INDEX(listar - en el modelo), VER(ver - en el modelo) y CREAR(crear - en el modelo) RETORNAN/DEVUELVEN datos tal cual como en el modelo ya que son consultas de retorno

        // Según el id que se le pase desde la vista, lo muestra
        public function ver($id){
            $this -> persona -> set("id", $id);
            return $this -> persona -> ver();
        }

        // Va a INSERTAR/METER datos en el ATRIBUTO/CAMPO DE LA TABLA el CONTENIDO que reciba en la vista
        public function crear($cedula, $nombres, $apellidos, $usuario, $clave){
            $this -> persona -> set("cedula", $cedula);
            $this -> persona -> set("nombres", $nombres);
            $this -> persona -> set("apellidos", $apellidos);
            $this -> persona -> set("usuario", $usuario);
            $this -> persona -> set("clave", $clave);

            // Siempre una vez AGREGADOS/SETEADOS, persona ejecuta el método necesario
            $resultado = $this -> persona -> crear();
            return $resultado;

        }

        // Según el id que llame desde la vista, lo elimina
        public function eliminar($id){
            $this -> persona -> set("id", $id);
            $this -> persona -> eliminar();
        }

        // 
        public function editar($nombres, $apellidos, $usuario, $clave){
            $this -> persona -> set("nombres", $nombres);
            $this -> persona -> set("apellidos", $apellidos);
            $this -> persona -> set("usuario", $usuario);
            $this -> persona -> set("clave", $clave);

            $this -> persona -> editar();
        }
    }
?>