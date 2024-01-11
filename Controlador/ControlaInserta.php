<?php

    include_once "../Modelo/CampeonBD.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $nombre = $_POST['nombre'];
        $rol = $_POST['rol'];
        $dificultad = $_POST['dificultad'];
        $descripcion = $_POST['descripcion'];
        
        $campeon = new Campeon();
        $campeon->setNombre($nombre);
        $campeon->setRol($rol);
        $campeon->setDificultad($dificultad);
        $campeon->setDescripcion($descripcion);
        
        if (CampeonBD::addCampeon($campeon)){
            echo "<br>Registro insertado correctamente";
        }
        else {
            echo "<br>Ha ocurrido un error.";
        }
    }




?>