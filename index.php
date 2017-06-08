<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            $lang = isset($_GET['lang']) ? $_GET['lang'] : "gal";
            if($lang == "es") {
                ?>
                <title>Alcar Carpinteros - Inicio</title>
                <?php
            } else {
                ?>
                <title>Alcar Carpinteiros - Inicio</title>
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
            <img src="imgs/inicio.jpg" class="imgart" alt="" />
            <article class="">
                <h2>INICIO</h2>
                <?php if($lang == "es") { ?>
                    <p class="columnas">Fusce varius, libero convallis tincidunt consequat, massa tellus maximus tortor, ut pulvinar libero ipsum vitae justo. Maecenas nec urna dui. Duis in lacus orci. Curabitur ac dapibus augue. Nullam mattis pellentesque massa, eget cursus ex ultrices in. Cras rhoncus purus id sapien dignissim, non bibendum lacus rhoncus. Cras eu pulvinar magna, et tempus ante. In egestas mattis fringilla. Nulla pellentesque nisl nec felis dictum tristique. Proin rutrum sodales ligula in vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent cursus dolor ante, nec elementum magna mattis eu. Proin vulputate tellus ac ex accumsan sagittis. In nec tempor lacus. Praesent vitae fermentum sapien. Vestibulum sed imperdiet odio, quis varius metus. Duis maximus accumsan aliquet. Praesent commodo ut metus id dictum. Etiam hendrerit dignissim magna eu pulvinar. Pellentesque ut magna et ex luctus maximus vel id eros. Donec id mi a orci maximus posuere in id libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam vel lectus ac metus pretium sollicitudin. Aenean feugiat viverra gravida. Sed ut vestibulum orci. Aliquam volutpat, arcu et bibendum eleifend, mi nisi semper tellus, vitae luctus nisl nulla a risus. Nunc auctor, nunc et vulputate lacinia, dolor nisi congue nisl, tincidunt volutpat sem metus nec est. </p>
                <?php } else {?>
                    <p class="columnas">Vestibulum bibendum euismod velit, non finibus elit facilisis vel. Nam dignissim, tellus a egestas imperdiet, eros mauris faucibus velit, non luctus arcu ex facilisis mi. Curabitur sodales laoreet elit, ac fringilla ex porta id. Duis id varius ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam bibendum tincidunt aliquam. Nullam auctor consectetur tellus, quis egestas nisi semper non. Donec consequat auctor nibh, ut pretium ligula egestas in. Phasellus sed odio sapien. Vestibulum ut suscipit justo, a pellentesque sapien. Proin a ipsum tellus. Vivamus pellentesque nunc lacus, at auctor leo sagittis eu. Nullam posuere pharetra tellus et imperdiet. Proin aliquet lacus id velit mattis, quis luctus odio imperdiet. Nunc elementum arcu arcu, eget suscipit ligula molestie sagittis. Donec sit amet eros ut velit sagittis accumsan eu vitae sem.</p>
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
