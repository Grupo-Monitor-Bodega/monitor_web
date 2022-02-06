<?php
require_once "conexion.php";

$obj = new conectar();
$conectar = $obj->conexion();

$sql = mysqli_query($conectar,"SELECT date as date,temperatura as temp FROM datos ORDER BY date DESC limit 100 ");

$myArray = array();

while($row = $sql->fetch_array(MYSQLI_ASSOC)) {

  $myArray[] =[
    "date" => intval($row['date']), //int
    "temp" => floatval($row['temp']) //numerico
  ];



}

echo json_encode($myArray);

?>