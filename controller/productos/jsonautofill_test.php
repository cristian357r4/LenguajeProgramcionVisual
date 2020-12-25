<?php
require_once "../Conectar.php";

$conn= new Conectar();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lpv";
$find ="pap";
$sql = "SELECT nombre FROM productos WHERE nombre LIKE '%".$find."%' LIMIT 20";
$resultset = mysqli_query($conn->conexion(), $sql) or die("database error:". mysqli_error($conn));
$json = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
    $json[] = $rows["nombre"];
}
echo json_encode($json);
?>
