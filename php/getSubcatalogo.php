<?php
    include 'conectaBD.php';
    $bd = conectar();
    $rows = getSubcatalogo($bd, $_POST['id'], $_POST['lang']);
    desconectar($bd);
    print json_encode($rows);
?>