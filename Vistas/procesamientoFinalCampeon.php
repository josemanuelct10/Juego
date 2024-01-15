<?php
include_once "../Controlador/ControlaNombre.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $rol = isset($_POST['rol']) ? $_POST['rol'] : null;
    $dificultad = isset($_POST['dificultad']) ? $_POST['dificultad'] : null;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : null;

    $nombreAntiguo = isset($_POST['nombreAntiguo']) ? $_POST['nombreAntiguo'] : null;

    if (isset($_POST['actualizar'])) {
        editarCampeon($nombreAntiguo, $nombre, $rol, $dificultad, $descripcion);
        header("Location:../Vistas/mostrarCampeones.php");
        exit();
    } elseif (isset($_POST['eliminar'])) {
        eliminarCampeon($nombreAntiguo);
        header("Location:../Vistas/mostrarCampeones.php");
        exit();
    }
}
?>