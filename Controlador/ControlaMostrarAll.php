<?php
    include_once "../Modelo/CampeonBD.php";

    function mostrarTodos(){
        $arrayCampeones = CampeonBD::getAll();

        return $arrayCampeones;
    }
    

?>