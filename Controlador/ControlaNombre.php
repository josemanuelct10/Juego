<?php
include_once "../Modelo/CampeonBD.php";

function filtrarNombre($nombre){
    $campeon = CampeonBD::buscarCampeonPorNombre($nombre);

    if (is_object($campeon)) {
        return $campeon;
    } else {
        header("Location:../Vistas/formManipular.php");
        exit();

    }
}

function eliminarCampeon($nombre){
    CampeonBD::eliminarCampeonPorNombre($nombre);
}

function editarCampeon($nombre, $nombreNuevo, $rol, $dificultad, $descripcion){
    CampeonBD::editarCampeon($nombre, $nombreNuevo, $rol, $dificultad, $descripcion);
}
?>
