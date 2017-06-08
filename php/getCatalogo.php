<?php
    include 'conectaBD.php';
    $bd = conectar();
    $rows = getCatalogo($bd, $_POST['lang']);
    desconectar($bd);
    print json_encode($rows);
?>
