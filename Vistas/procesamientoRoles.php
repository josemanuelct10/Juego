
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
    <?php
    include_once "../Controlador/ControlaRol.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener el rol seleccionado del formulario
            $rolSeleccionado = isset($_POST["rolSeleccionado"]) ? $_POST["rolSeleccionado"] : null;
        }


        if ($array) {
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Dificultad</th>
                        <th>Descripción</th>
                    </tr>";

            foreach ($array as $campeon) {
                // Accedes a las propiedades del objeto Campeon y los imprimes en una fila de la tabla
                echo "<tr>
                        <td>" . $campeon->getId() . "</td>
                        <td>" . $campeon->getNombre() . "</td>
                        <td>" . $campeon->getRol() . "</td>
                        <td>" . $campeon->getDificultad() . "</td>
                        <td>" . $campeon->getDescripcion() . "</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "No hay campeones disponibles.";
        }

    ?>




    <footer>
    </footer>
</body>
</html>