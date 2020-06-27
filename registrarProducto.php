<?php


include_once "controller/Conectar.php";

$descripcion = $_POST["Descripcion_P"];
$precio = $_POST["Precio_P"];
$existencia = $_POST["Existencia_P"];
$categoria = $_POST["Categoria_P"];

echo $descripcion;
echo $precio;
echo $categoria;

    $conexion = new Conectar();

    $string =  "INSERT INTO productos (nombre, precio ,existencia, id_categoria) VALUES ('$descripcion', '$precio', '$existencia', '$categoria')";

    //asocio los campos del insert a los campos del formulario

    $usuario = mysqli_query($conexion->conexion(), $string);
    //cierro la conexion
    $conexion = null;

    header('Location: altaP.php?text=success');

?>