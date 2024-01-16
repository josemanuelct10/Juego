<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'] ?? '';

    if ($accion === 'Registrarse') {
        header('Location: ../Vistas/formRegistro.php');
        exit;
    } elseif ($accion === 'Iniciar Sesion') {
        header('Location: ../Vistas/formInicioSesion.php');
        exit;
    }
}
?>
