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

        public static function getAllRoles(){
            include_once "../Conexion/conexion.php";
            $result = false;
        
            // Establecemos conexión con la base de datos
            $conexion = Conexion::obtenerConexion();
        
            // Preparamos la consulta SQL
            $sql = "SELECT DISTINCT rol FROM campeon";
        
            $sentencia = $conexion->prepare($sql);
        
            $result = $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_COLUMN);
        }

        public static function buscarCampeonPorNombre($nombre) {
            include_once "../Conexion/conexion.php";
            $result = false;
        
            // Establecemos conexión con la base de datos
            $conexion = Conexion::obtenerConexion();
        
            // Preparamos la consulta SQL
            $sql = "SELECT * FROM campeon WHERE nombre LIKE :nombre";
        
            $sentencia = $conexion->prepare($sql);
        
            // Utilizamos la cláusula LIKE para buscar nombres que contengan el valor proporcionado
            ;
            $sentencia->bindParam(":nombre", $nombre);
        
            $result = $sentencia->execute();
            
            // Establecemos el modo de obtención de resultados como objetos de la clase Campeon
            $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");
        
            return $sentencia->fetchAll();
        }
        
        
    }

?>