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
    <form action="../Controlador/ControlaInserta.php" method="post">
        Nombre: <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br><br>
        Rol: <input type="text" id="rol" name="rol" placeholder="Rol" required><br><br>
        Dificultad: <input type="text" id="dificultad" name="dificultad" placeholder="Dificultad" required><br><br>
        Descripcion: <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion" required><br><br>
        <input type="submit" name="enviar" value="Insertar">
    </form>
    <footer>
    </footer>
</body>
</html>
