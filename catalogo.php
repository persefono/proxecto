<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            $lang = isset($_GET['lang']) ? $_GET['lang'] : "gal";
            if($lang == "es") {
                ?>
                <title>Alcar Carpinteros - Cat&aacute;logo</title>
                <?php
            } else {
                ?>
                <title>Alcar Carpinteiros - Cat&aacute;logo</title>
                <?php
            }
        ?>
        <link rel="stylesheet" href="css/normalize.css" media="screen" />
        <link rel="stylesheet" href="css/estilo.css" media="screen" />
        <link rel="stylesheet" href="css/hexagonos.css" media="screen" />
        <script src="js/jquery-3.2.0.min.js" charset="utf-8"></script>
        <script src="js/hexsc.js" charset="utf-8"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="header">
            <img id="logo" src="imgs/alcar-logo.png" alt="ALCAR" />
            <div id="idiomas">
                <a href="?lang=gal">GALEGO</a>
                <a href="?lang=es">ESPAÑOL</a>
            </div>
        </div>
        <nav>
            <div id="menu">
                <label for="imenu"><span class="fa fa-bars"></span> Menú</label>
                <input id="imenu" type="checkbox" name="imenu" value="" />
                <a class="amenu" href="index.php<?php echo $lang == "es" ? "?lang=es" : "?lang=gal"; ?>">Inicio</a>
                <a class="amenu" href="catalogo.php<?php echo $lang == "es" ? "?lang=es" : "?lang=gal"; ?>">Cat&aacute;logo</a>
                <a class="amenu" href="materiais.php<?php echo $lang == "es" ? "?lang=es" : "?lang=gal"; ?>"><?php echo $lang == "es" ? "Materiales" : "Materiais"; ?></a>
            </div>
        </nav>
        <main id="categories" class="clr">
        </main>
        <footer>
            <div id="barra"></div>
            <ul id="links">
                <li><a href="acerca.php<?php echo $lang == "es" ? "?lang=es" : "?lang=gal"; ?>"><?php echo $lang == "es" ? "Acerca de nosotros" : "Acerca de n&oacute;s"; ?></a></li>
                <li><a href="contacto.php<?php echo $lang == "es" ? "?lang=es" : "?lang=gal"; ?>">Contacto</a></li>
                <li><a href="ubicacion.php<?php echo $lang == "es" ? "?lang=es" : "?lang=gal"; ?>">Ubicaci&oacute;n</a></li>
                <li>S&iacute;guenos en:
                    <span class="fa fa-facebook-square iconos"></span>
                    <span class="fa fa-twitter-square iconos"></span>
                    <span class="fa fa-google-plus-square iconos"></span>
                </li>
            </ul>
        </footer>
    </body>
</html>
