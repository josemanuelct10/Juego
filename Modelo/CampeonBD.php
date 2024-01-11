<?php
    include_once "Campeon.php";
    class CampeonBD{
        public static function addCampeon(Campeon $campeon):bool{
            include_once "../Conexion/conexion.php";
            $result = false;

            // Establecemos conexion con la base de datos
            $conexion = Conexion::obtenerConexion();

            // Preparar la consulta SQL
            $sql = "INSERT INTO campeon (nombre, rol, dificultad, descripcion) VALUES (:nombre, :rol, :dificultad, :descripcion)";

            $sentencia = $conexion -> prepare($sql);

            $sentencia->bindValue(":nombre", $campeon->getNombre());
            $sentencia->bindValue(":rol", $campeon->getRol());
            $sentencia->bindValue(":dificultad", $campeon->getDificultad());
            $sentencia->bindValue("descripcion", $campeon->getDescripcion());

            $result = $sentencia->execute();

            if ($result){
                echo "Registro insertado correctamente.<br>";
            }
            else{
                echo "El registro no se ha podido insertar correctamente.<br>";
            }

            return $result;

        }

        public static function getAll(){
            include_once "../Conexion/conexion.php";
            $result = false;

            // Establecemos conexion con la base de datos
            $conexion = Conexion::obtenerConexion();

            // Preparar la consulta SQL
            $sql = "SELECT * FROM campeon";

            $sentencia = $conexion -> prepare($sql);


            $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");

            $result = $sentencia->execute();
            return $sentencia->fetchAll();
        }

        public static function getRol($rol){
            include_once "../Conexion/conexion.php";
            $result = false;

            $conexion = Conexion::obtenerConexion();

            $sql = "SELECT * FROM campeon WHERE rol = '$rol'";

            $sentencia = $conexion -> prepare($sql);

            $sentencia -> setFetchMode(PDO::FETCH_CLASS, "Campeon");

            $result = $sentencia->execute();

            return $sentencia->fetchAll();
        }
    }

?>