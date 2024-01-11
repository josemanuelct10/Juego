<?php

    include_once "../Modelo/CampeonBD.php";
    function filtrarRol($rol){
        $array_campeones = CampeonBD::getRol($rol);

        return $array_campeones;
    }

?>