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
        
            return $sentencia->fetch();
        }

        public static function eliminarCampeonPorNombre($nombre) {
            include_once "../Conexion/conexion.php";
            
            // Establecemos conexión con la base de datos
            $conexion = Conexion::obtenerConexion();
            
            // Preparamos la consulta SQL para eliminar el campeón por nombre
            $sql = "DELETE FROM campeon WHERE nombre = :nombre";
            
            $sentencia = $conexion->prepare($sql);
            
            // Asociamos el parámetro :nombre con el valor proporcionado
            $sentencia->bindParam(":nombre", $nombre);
            
            // Ejecutamos la consulta
            return $sentencia->execute();
        }

        
        public static function editarCampeon($nombre, $nuevoNombre, $rol, $dificultad, $descripcion) {
            include_once "../Conexion/conexion.php";
            
            // Establecemos conexión con la base de datos
            $conexion = Conexion::obtenerConexion();
            
            // Preparamos la consulta SQL para actualizar los datos del campeón
            $sql = "UPDATE campeon SET nombre = :nuevoNombre, rol = :rol, dificultad = :dificultad, descripcion = :descripcion WHERE nombre = :nombre";
            
            $sentencia = $conexion->prepare($sql);
            
            // Asociamos los parámetros con los valores proporcionados
            $sentencia->bindParam(":nombre", $nombre);
            $sentencia->bindParam(":nuevoNombre", $nuevoNombre);
            $sentencia->bindParam(":rol", $rol);
            $sentencia->bindParam(":dificultad", $dificultad);
            $sentencia->bindParam(":descripcion", $descripcion);
            
            // Ejecutamos la consulta
            return $sentencia->execute();
        }
        


        
        
    }

?>