
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOL</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" type="image/png" href="logo.jpg" sizes="16x16">
    <link rel="icon" type="image/png" href="logo.jpg" sizes="32x32">
</head>
<body>
    <header>
        <div id="logo">
            <img src="Imagenes/logo.jpg" alt="Logo de Pescados Cañete Trillo">
        </div>
        <nav>
            <ul>
                <li><a href="Index.php">Inicio</a></li>
                <li><a href="mostrarCampeones.php">Mostrar Campeones</a></li>
                <li><a href="filtrarRol.php">Filtrar Rol</a></li>
                <li><a href="formInserta.php">Insertar Campeon</a></li>
                <li><a href="manipularCampeon.php">Manipular Campeon</a></li>
            </ul>
        </nav>
        <form method="post" action="buscar_elemento.php">
            <div id="search">
                <input type="text" placeholder="Buscar..." name="codigoNombre">
                <button type="submit">Buscar</button>
            </div>
        </form>
    </header>
    <?php
        include_once "../Controlador/ControlaMostrarAll.php";
        $array = mostrarTodos();
        if ($array) {
            foreach ($array as $campeon) {
                // Accedes a las propiedades del objeto Campeon
                echo "ID: " . $campeon->getId() . "<br>";
                echo "Nombre: " . $campeon->getNombre() . "<br>";
                echo "Rol: " . $campeon->getRol() . "<br>";
                echo "Dificultad: " . $campeon->getDificultad() . "<br>";
                echo "Descripción: " . $campeon->getDescripcion() . "<br>";
                echo "<br>";
            }
        } else {
            echo "No hay campeones disponibles.";
        }
    ?>



    <footer>
    </footer>
</body>
</html>
