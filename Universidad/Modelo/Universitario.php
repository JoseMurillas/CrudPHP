<?php 
    require_once "../Modelo/Usuario.php";
    require_once "../Modelo/Conexion.php";
    class Universitario extends Usuario{
        public $estrato;
        public $valorSem;

        public function calcularSemestre($estrato){
            $valorSem = $estrato * 1300000;
            return $valorSem;
        }
        
        public function __construct($identificacion, $nombre, $correo, $telefono, $clave, $estrato){
            parent::__construct($identificacion, $nombre, $correo, $telefono, $clave);
            $this->estrato = $estrato;
            $this->valorSem = $this->calcularSemestre($estrato);
            $this->ejecucion = new Conexion();
        }

        public function RegistrarEstudiante(){
            $this->ejecucion->Ejecutar("INSERT INTO estudiante (`ID`,`nombre`,`correo`,`telefono`,`clave`,`estrato`,`valorSemestre`) 
                VALUES (".$this->__getIdentificacion().", '".$this->nombre."', '".$this->correo."', '".$this->telefono."', '".$this->__getClave()."', ".$this->estrato.", ".$this->valorSem.")");
        }
    }
?>