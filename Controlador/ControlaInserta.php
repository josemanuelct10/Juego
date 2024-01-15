<?php
include_once "../Modelo/CampeonBD.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre = $_POST['nombre'];
    $rol = $_POST['rol'];
    $dificultad = $_POST['dificultad'];
    $descripcion = $_POST['descripcion'];
    
    $campeon = new Campeon();
    $campeon->setNombre($nombre);
    $campeon->setRol($rol);
    $campeon->setDificultad($dificultad);
    $campeon->setDescripcion($descripcion);

    try {
        if (CampeonBD::addCampeon($campeon)) {
            header("Location:../Vistas/mostrarCampeones.php");
            exit();
        } else {
            echo "<br>Ha ocurrido un error durante la inserción del campeón.";
        }
    } catch (Exception $e) {
        // Manejo de la excepción. Puedes imprimir un mensaje de error específico o redirigir a una página de error.
        echo "Error: " . $e->getMessage();
    }
}
?>
