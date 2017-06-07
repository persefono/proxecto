<?php
	// servidor : gallaecia
	// usuario: daw2017_10
	// password: uoed092-
	// bd: daw2017_10
	// http://alumnos/nunvianur/docs
	function conectar() {
		// $bd=new Mysqli("localhost", "root", "", $tabla);
		// $lhost = "mysql:host=gallaecia;dbname=" . $tabla;
		// $bd = new PDO("mysql:host=gallaecia;dbname=daw2017_10", "daw2017_10", "uoed092-");
		$bd = new PDO("mysql:host=127.0.0.1;mysql:port=3306;dbname=daw2017_10;","daw2017_10", "uoed092-");
		return $bd;
	}

	function desconectar($bd) {
		// $bd->close();
		$bd->connection = null;
	}

	function getMateriais($bd) {
		$stmt = "SELECT idMadera, nombre FROM maderasgal;";
		$rows = $bd->query($stmt);
		return $rows->fetchAll(PDO::FETCH_ASSOC);
	}

	// function getMensajes($bd, $idsesion) {
	// 	$stmt = "SELECT nick, cuerpo, hora FROM mensajes WHERE idsesion = " . $idsesion . ' ORDER BY hora';
	// 	$rows = $bd->query($stmt);
	// 	return $rows->fetchAll(PDO::FETCH_ASSOC);
	// }
	//
	// function setMensaje($bd, $idses, $nick, $cuerpo, $hora) {
	// 	$stmt = $bd->prepare("INSERT INTO mensajes VALUES (null,?,?,?,?)");
	// 	return $stmt->execute(array($idses,$nick,$cuerpo,$hora));
	// 	// $stmt->bind_param($idses, $nick, $cuerpo, $hora);
	// 	// $stmt->execute();
	// 	// return $rows->fetch_all();
	// }
	//
	// function eliminarMensajes($bd, $idses) {
	// 	$ret = $bd->prepare("DELETE FROM mensajes WHERE idsesion = ?");
	// 	return $ret->execute(array($idses));
	// }
?>
