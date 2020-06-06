<?php
require_once "controller/Conectar.php";

$conexion = new Conectar();//constructor de la clase

$query_productos = "SELECT prod.id_producto, prod.descripcion,
       (SELECT cat.descripcion
        FROM categoria_productos AS cat
        WHERE prod.id_categoria = cat.id_categoria )AS categoria
FROM productos AS prod";

$productos = mysqli_query($conexion->conexion(), $query_productos);//conectar() es metodo de clase


/* Execute a prepared statement by passing an array of values */
?>



