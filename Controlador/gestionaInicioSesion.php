<?php
    include_once "../Modelo/UsuarioBD.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"];
        $pwd = $_POST["pwd"];

        try {
            if (UsuarioBD::comprobarInicioSesion($usuario, $pwd)) {
                echo "USUARIO LOGUEADO CORRECTAMENTE";
            }
            else{
                echo "El usuario o la contraseña son incorrectos.";
            }
        } catch (Exception $e) {
            // Manejo de la excepción. Puedes imprimir un mensaje de error específico o redirigir a una página de error.
            echo "Error: " . $e->getMessage();
        }


    }
?>