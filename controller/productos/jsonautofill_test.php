<?php
require_once "../Conectar.php";

$conn= new Conectar();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lpv";
$sql = "SELECT descripcion FROM productos WHERE descripcion LIKE '%".$_GET['query']."%' LIMIT 20";
$resultset = mysqli_query($conn->conexion(), $sql) or die("database error:". mysqli_error($conn));
$json = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
    $json[] = $rows["descripcion"];
}
echo json_encode($json);
?>
