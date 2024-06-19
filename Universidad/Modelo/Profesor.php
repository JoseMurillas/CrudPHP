<?php 
    require_once "../Modelo/Usuario.php";
    require_once "../Modelo/Conexion.php";
    class Profesor extends Usuario{
        public $grado;
        public $salario;
        public $ejecucion;

        public function Salario($grado){
            $salario = $grado * 650000;
            return $salario;
        }
        
        public function __construct($identificacion, $nombre, $correo, $telefono, $clave, $grado) {
            parent::__construct($identificacion, $nombre, $correo, $telefono, $clave);
            $this->grado = $grado;
            $this->salario = $this->Salario($grado);
            $this->ejecucion = new Conexion();
        }

        public function RegistrarProfesor(){
            $this->ejecucion->Ejecutar("INSERT INTO profesores (`ID`,`nombre`,`correo`,`telefono`,`clave`,`grado`,`salario`) 
                VALUES (".$this->__getIdentificacion().", '".$this->nombre."', '".$this->correo."', '".$this->telefono."', '".$this->__getClave()."', ".$this->grado.", ".$this->salario.")");
        }
    }
?>