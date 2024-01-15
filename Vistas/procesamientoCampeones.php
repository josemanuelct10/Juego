<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOL</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" type="image/png" href="Imagenes/logo.jpg" sizes="16x16">
    <link rel="icon" type="image/png" href="Imagenes/logo.jpg" sizes="32x32">
</head>
<body>
    <header>
        <div id="logo">
            <img src="Imagenes/logo.jpg" alt="Logo de LOL">
        </div>
        <nav>
            <ul>
                <li><a href="Index.php">Inicio</a></li>
                <li><a href="mostrarCampeones.php">Mostrar Campeones</a></li>
                <li><a href="filtrarRol.php">Filtrar Rol</a></li>
                <li><a href="formInserta.php">Insertar Campeon</a></li>
                <li><a href="formManipular.php">Manipular Campeon</a></li>
            </ul>
        </nav>
    </header>
    <?php
    include_once "../Controlador/ControlaNombre.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $campeon = filtrarNombre($nombre);
    }
    ?>

<form action="procesamientoFinalCampeon.php" method="post">            
            <label for="nombre">Nombre:</label>
            <input type="hidden" name="nombreAntiguo" value="<?php echo $campeon->getNombre(); ?>">
            <input type="text" id="nombre" name="nombre" value="<?php echo $campeon->getNombre(); ?>" required>

            <label for="rol">Rol:</label>
            <input type="text" id="rol" name="rol" value="<?php echo $campeon->getRol(); ?>" required>

            <label for="dificultad">Dificultad:</label>
            <input type="text" id="dificultad" name="dificultad" value="<?php echo $campeon->getDificultad(); ?>" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" value="<?php echo $campeon->getDescripcion(); ?>" required>

            <input type="submit" name="actualizar" value="Actualizar">
            <input type="submit" name="eliminar" value="Eliminar" onclick="return confirm('¿Estás seguro de que quieres eliminar este campeón?');">
        </form>


    
 

    <footer>
    </footer>
</body>
</html>
