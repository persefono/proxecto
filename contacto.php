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
            <h1>CONTACTO</h1>
            <?php if($lang == "es") { ?>
                <p>Pídanos su presupuesto sin compromiso, poniéndose en contacto con nosotros por teléfono o en el correo donde con mucho gusto les atenderemos y aconsejaremos sobre cualquier consulta o duda que nos plantee.</p>
            <?php } else {?>
                <p>Pídanos o seu presuposto sen compromiso, poñéndose en contacto co nós por teléfono ou no noso correo onde, con moito gusto, os atenderemos e aconsellaremos sobre calquera consulta ou duda que nos plantexe.</p>
            <?php } ?>
            <p></p>
            <p><span class="fa fa-phone fa-lg"></span> 6** ** ** **</p>
            <p><span class="fa fa-envelope-o fa-lg"></span> alcarcarpinteros@gmail.com</p>
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
