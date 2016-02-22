<?php
$mysqli = mysqli_connect("127.0.0.1", "root", "FHVgMxJa2Q-L", "morrisjs");
 
if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
$sql = "SELECT *
        FROM stats
        ";
 
$data = $donut = [];
if($result = $mysqli->query($sql))
{
      while($row = $result->fetch_object())
      {
          $data[] = $row;
          $donut[] = (object)array("label" => $row->city, "value" => $row->people);
      }
}
?>