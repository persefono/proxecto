<?php
    include 'conectaBD.php';
    $bd = conectar();
    $rows = getMateriais($bd, $_POST['lang']);
    desconectar($bd);
    print json_encode($rows);
?>
