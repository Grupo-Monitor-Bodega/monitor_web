<?php
require_once "conexion.php";

$obj = new conectar();
$conectar = $obj->conexion();

$dispositivo = $obj->whiteStr($_GET['dispositivo']);
$temperatura = $obj->whiteStr($_GET['temperatura']);
$humedad = $obj->whiteStr($_GET['humedad']);
$date = time();


$sql = mysqli_query($conectar,"INSERT INTO datos VALUES ('$date','$dispositivo','$temperatura','$humedad') ");

?>