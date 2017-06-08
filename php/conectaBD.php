<?php
	// servidor : gallaecia
	// usuario: daw2017_10
	// password: uoed092-
	// bd: daw2017_10
	// http://alumnos/nunvianur/docs
	function conectar() {
		// $bd = new PDO("mysql:host=127.0.0.1;mysql:port=3306;dbname=daw2017_10;","daw2017_10", "uoed092-");
		$bd = new PDO("mysql:host=localhost;dbname=daw2017_10", "root", "abc123.");
		return $bd;
	}

	function desconectar($bd) {
		$bd->connection = null;
	}

	function getMateriais($bd, $lang) {
		$stmt = "SELECT idMadera, nombre FROM maderas" . $lang;
		$rows = $bd->query($stmt);
		return $rows->fetchAll(PDO::FETCH_ASSOC);
	}

	function getSubmateriais($bd, $id, $lang) {
		$stmt = "SELECT nombre FROM tmaderas" . $lang . " WHERE idMadera = " . $id;
		$rows = $bd->query($stmt);
		return $rows->fetchAll(PDO::FETCH_ASSOC);
	}

	function getCatalogo($bd, $lang) {
		$stmt = "SELECT idCatalogo, nombre FROM catalogo" . $lang;
		$rows = $bd->query($stmt);
		return $rows->fetchAll(PDO::FETCH_ASSOC);
	}

	function getSubcatalogo($bd, $id, $lang) {
		$stmt = "SELECT nombre FROM subcatalogo" . $lang . " WHERE idCatalogo = " . $id;
		$rows = $bd->query($stmt);
		return $rows->fetchAll(PDO::FETCH_ASSOC);
	}
?>
