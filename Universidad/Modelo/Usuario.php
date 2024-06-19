<?php
    class Usuario{
        public $nombre;
        public $correo;
        public $telefono;
        private $clave;
        private $identificacion;
        private $ejecucion;

        public function __setidentificacion($identificacion){
            $this->identificacion = $identificacion;
        }
        public function __getidentificacion(){
            return $this->identificacion;
        }

        public function __setclave($clave){
            $this->clave = $clave;
        }
        public function __getclave(){
            return $this->clave;
        }
        public function __construct($identificacion, $nombre, $correo, $telefono, $clave) {
            $this->identificacion = $identificacion;
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->telefono = $telefono;
            $this->clave = $clave;
        }
    }

?>