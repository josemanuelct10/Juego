
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

    </header>

    <form action="../Controlador/nuevoUsuario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br>

        <button type="submit">Registrarse</button>
    </form>



    <footer>
    </footer>
</body>
</html>
