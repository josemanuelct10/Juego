<?php
include_once "../Modelo/UsuarioBD.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $nombreUsuario = $_POST['usuario'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $usuario = new Usuario();

    $usuario->setNombre($nombre);
    $usuario->setUsuario($nombreUsuario);
    $usuario->setPassword($password);
    $usuario->setEmail($email);

    try{
        if (UsuarioBD::addUsuario($usuario)){
            echo "El usuario XXX ha sido introducido en el sistema con la contraseña YYY";
        }
    } catch (Exception $e) {
        // Manejo de la excepción. Puedes imprimir un mensaje de error específico o redirigir a una página de error.
        echo "Error: " . $e->getMessage();
    }
}

?>