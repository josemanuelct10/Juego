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
    <main>
        <nav id="nav-background">
            <div class="section-container">
                <section id="campeones">
                    <a href="mostrarCampeones.php">
                        <img src="Imagenes/campeones.jpg" alt="Imagen de campeones">
                        <h2>Campeones</h2>
                    </a>
                </section>
            </div>
        </nav>
    </main>

    <footer>
    </footer>
</body>
</html>
