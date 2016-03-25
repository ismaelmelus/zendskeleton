<?php
/*Tengo que esconder este fichero y publicar los datos en un fichero con extension .json
 *$mysqli = mysqli_connect("localhost", "root", "FHVgMxJa2Q-L", "morrisjs");
 */

$mysqli = mysqli_connect("127.0.0.1", "ismael", "ssserc0.", "maincontrolhome");
if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
}
 
$sql = "SELECT * FROM Heat";
$data = $donut = [];

if($result = $mysqli->query($sql))
{
      while($row = $result->fetch_object())
      {
          $data[] = $row;
         // $donut[] = (object)array("label" => $row->city, "value" => $row->people);
      }
}
header('Content-Type: application/json');
echo json_encode($data);
//die();
?>