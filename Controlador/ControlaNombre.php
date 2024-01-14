<?php
include_once "../Modelo/CampeonBD.php";

function filtrarNombre($nombre){
    $campeon = CampeonBD::buscarCampeonPorNombre($nombre);

    return $campeon;
}


function eliminarCampeon($nombre){
    CampeonBD::eliminarCampeon($nombre);
}

function editarCampeon($nombre, $nombreNuevo, $rol, $dificultad, $descripcion){
    CampeonBD::editarCampeon($nombre, $nombreNuevo, $rol, $dificultad, $descripcion);
}
?>
