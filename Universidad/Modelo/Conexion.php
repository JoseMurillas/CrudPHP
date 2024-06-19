<?php 
    class Conexion{
        private $cnx;

        public function Ejecutar($query){
            require_once 'DatosConexion.php';
            $cnx =new mysqli($servername,$username,$password,$database);
            print($query);
            if($cnx->connect_errno){
                echo "Error";
                die("Error de conexión: ". $cnx->connect_error);
            }else{
                $resultado = $cnx->query($query);
                $cnx->close();
                return $resultado;
            }
        }
    }
    
?>