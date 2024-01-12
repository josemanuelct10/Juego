
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
                <li><a href="manipularCampeon.php">Manipular Campeon</a></li>
            </ul>
        </nav>

    </header>
    <form method="post" action="procesamientoRoles.php">
    <div id="search">
        <select name="rolSeleccionado">
            <?php
                include_once "../Controlador/ControlaRol.php";
                // Llamamos a la función para obtener todos los roles
                $roles = sacarRoles();

                if ($roles) {
                    foreach ($roles as $rol) {
                        echo "<option value=\"$rol\">$rol</option>";
                    }
                } else {
                    echo "<option value=\"\">No hay roles disponibles</option>";
                }
            ?>
        </select>
        <button type="submit">Buscar</button>
    </div>
</form>




    <footer>
    </footer>
</body>
</html>
