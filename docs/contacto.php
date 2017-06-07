<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Alcar Carpinteros - Contacto</title>
        <link rel="stylesheet" href="../css/normalize.css" media="screen" />
        <link rel="stylesheet" href="../css/estilo.css" media="screen" />
    </head>
    <body>
        <div id="header">
            <img id="logo" src="../imgs/alcar-logo.png" alt="ALCAR" />
            <div id="idiomas">
                <a href="?lang=gal">GALEGO</a>
                <a href="?lang=es">ESPAÑOL</a>
            </div>
        </div>
        <nav>
            <div id="menu">
                <a href="index.html">Inicio</a>
                <a href="catalogo.html">Cat&aacute;logo</a>
                <a href="materiais.html">Materiales</a>
            </div>
        </nav>
        <main>
            <h1>Solicita tu presupuesto</h1>
            <form class="form" action="contacto.php" method="post">
                <label for="nombre" class="col4">Nombre:</label>
                <label for="mail" class="col4">E-Mail:</label>
                <input type="text" id="nombre" class="col4" name="nombre" value="" placeholder="Nombre..." />
                <input type="text" id="mail" class="col4" name="mail" value="" placeholder="E-Mail..." />
                <label for="desc" class="col12">Descripción del trabajo a preguntar:</label>
                <textarea name="desc" class="col12" rows="8" cols="80" placeholder="Descripción del trabajo..." /></textarea>
            </form>
        </main>
        <footer>
            <div id="barra"></div>
            <ul id="links">
                <li><a href="acerca.html">Acerca de nosotros</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="ubicacion.html">Ubicaci&oacute;n</a></li>
                <li>S&iacute;guenos en:
                    <!-- TODO imgs de rss -->
                </li>
            </ul>
        </footer>
    </body>
</html>
