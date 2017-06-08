<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            $lang = isset($_GET['lang']) ? $_GET['lang'] : "gal";
            if($lang == "es") {
                ?>
                <title>Alcar Carpinteros - Acerca de nosotros</title>
                <?php
            } else {
                ?>
                <title>Alcar Carpinteiros - Acerca de n&oacute;s</title>
                <?php
            }
        ?>
        <link rel="stylesheet" href="css/normalize.css" media="screen" />
        <link rel="stylesheet" href="css/estilo.css" media="screen" />
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
        <main>
            <img src="imgs/acerca.jpg" class="imgart" alt="" />
            <article class="">
                <h2><?php echo $lang == "es" ? "ACERCA DE NOSOTROS" : "ACERCA DE N&Oacute;S"; ?></h2>
                <?php if($lang == "es") { ?>
                    <p class="columnas">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                <?php } else {?>
                    <p class="columnas">Morbi eu sem imperdiet velit gravida pharetra. Ut aliquet tristique ante, eu sagittis lacus pellentesque non. Sed euismod pharetra felis, ut porttitor diam gravida eget. Pellentesque fermentum arcu in mauris maximus congue. Ut quis mattis ex, at elementum quam. Nunc non dignissim nisi. Nulla suscipit, nunc vel vehicula tempor, nunc nisl sollicitudin justo, vehicula pulvinar velit lectus blandit orci. Integer mi velit, ornare eget lacinia in, interdum at eros. Nullam luctus varius placerat. Praesent eu tellus nec lorem malesuada auctor.</p>
                <?php } ?>
            </article>
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
