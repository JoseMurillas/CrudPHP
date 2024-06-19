<?php 
    require_once "../Modelo/Usuario.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $identificacion = $_POST["identificacion"];
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $clave = $_POST["clave"];
        $estrato = $_POST["estrato"];
        $grado = $_POST["grado"];
        $rol = $_POST["rol"];

        switch($rol){
            case '1':
                require_once "../Modelo/Universitario.php";
                $usuario = new Universitario($identificacion,$nombre,$correo,$telefono,$clave,$estrato);
                $usuario->calcularSemestre($estrato);
                $usuario->RegistrarEstudiante();
                break;
            case '2':
                require_once "../Modelo/Profesor.php";
                $usuario = new Profesor($identificacion,$nombre,$correo,$telefono,$clave,$grado);
                echo $usuario->Salario($grado);
                $usuario->RegistrarProfesor();
                break;
        }
    }else{
        echo "Conexión Erronea";
    }
?>