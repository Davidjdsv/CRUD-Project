<?php
    // Llama al modelo persona.php para poder utilizar la clase Persona
    include_once("modelos/persona.php");

    class ControladorPersona {
        private $persona;

        // Instancia la clase Persona en la variable $persona para poder usar sus métodos
        public function __construct(){
            $this->persona = new Persona();
        }
        
        // Ejecuta el método listar() del modelo, que obtiene todos los registros de la tabla
        public function index(){
            $resultado = $this->persona->listar();
            return $resultado;
        }

        // NOTA GENERAL: index (listar en el modelo), ver (ver en el modelo) y crear (crear en el modelo)
        // RETORNAN datos tal cual como en el modelo, ya que son consultas que devuelven información.

        // Obtiene un registro según el ID que recibe desde la vista
        public function ver($id){
            $this->persona->set("id", $id);
            return $this->persona->ver();
        }

        // Inserta un nuevo registro en la base de datos con los datos recibidos desde la vista
        public function crear($cedula, $nombres, $apellidos, $usuario, $clave){
            $this->persona->set("cedula", $cedula);
            $this->persona->set("nombres", $nombres);
            $this->persona->set("apellidos", $apellidos);
            $this->persona->set("usuario", $usuario);
            $this->persona->set("clave", $clave);

            // Una vez asignados los valores, ejecuta el método crear()
            $resultado = $this->persona->crear();
            return $resultado;
        }

        // Elimina un registro según el ID recibido desde la vista
        public function eliminar($id){
            $this->persona->set("id", $id);
            $this->persona->eliminar();
        }

        // Actualiza los datos de un registro con los valores recibidos desde la vista
        public function editar($nombres, $apellidos, $usuario, $clave){
            $this->persona->set("nombres", $nombres);
            $this->persona->set("apellidos", $apellidos);
            $this->persona->set("usuario", $usuario);
            $this->persona->set("clave", $clave);

            $this->persona->editar();
        }
    }
?>
