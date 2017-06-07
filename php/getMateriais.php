<?php
    include 'conectaBD.php';
    $bd = conectar();
    $rows = getMateriais($bd);
    desconectar($bd);
    print json_encode($rows);
 ?>
