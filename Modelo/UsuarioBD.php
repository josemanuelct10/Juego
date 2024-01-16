<?php
    include_once "Usuario.php";
    class UsuarioBD{
        public static function addUsuario(Usuario $usuario){

            $result = false;
            include_once "../Conexion/conexion.php";

            $conexion = Conexion::obtenerConexion();

            $sql = "INSERT INTO usuario (nombre, usuario, password, email) VALUES (:nombre, :usuario, :password, :email)";

            $sentencia = $conexion -> prepare($sql);

            if (!empty($usuario->getNombre()) && !empty($usuario->getUsuario()) && !empty($usuario->getPassword()) && !empty($usuario->getEmail())){
                $sentencia->bindValue(":nombre",$usuario->getNombre());
                $sentencia->bindValue(":usuario", $usuario->getUsuario());
                $sentencia->bindValue(":password",password_hash($usuario->getPassword(), PASSWORD_DEFAULT));
                $sentencia->bindValue(":email", $usuario->getEmail());
            }
            else echo "Se han dejado campos vacios.";
            

            $result = $sentencia->execute();

            return $result;
        }

        public static function comprobarInicioSesion($nombreUsuario, $pwd){
        $result = false;
        include_once "../Conexion/conexion.php";

        $conexion = Conexion::obtenerConexion();
        $sql = "SELECT * FROM usuario WHERE usuario = ?";

        $sentencia = $conexion->prepare($sql);

        $result =  $sentencia -> execute([
            $nombreUsuario
        ]);

        $usuarioBD = $sentencia->fetch();

        if($usuarioBD && password_verify($pwd, $usuarioBD["password"])){
            $result = true;
        }
        else $result = false;

        return $result;
        }
    }

?>