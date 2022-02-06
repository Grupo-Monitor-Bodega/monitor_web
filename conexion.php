<?php

class conectar{

	public function conexion(){

		$conexion = mysqli_connect("localhost",
			"monitor", //usuario
			"bodega",  //contraseña
			"monitor", //base de datos
			"3306");

		return $conexion;
	}

	public function whiteStr($inp) {
		if(is_array($inp))
			return array_map(__METHOD__, $inp);

		if(!empty($inp) && is_string($inp)) {
			return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
		}

		return $inp;
	}
}
?>