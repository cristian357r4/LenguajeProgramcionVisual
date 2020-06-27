<?php

include_once "./controller/Conectar.php";

$conexion = new Conectar();
$hoy = date("Y-m-d");
echo $hoy;


$detalleVenta = "INSERT INTO venta (fecha) values ('$hoy')";

$insert = mysqli_query($conexion->conexion(), $detalleVenta);





//$crea = "Insert into "