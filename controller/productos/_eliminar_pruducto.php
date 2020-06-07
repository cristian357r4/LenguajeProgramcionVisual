<?php

    $id=$_GET['id'];

    require_once "../Conectar.php";
    require_once "Producto.php";

    $producto = new Producto();
    if($producto->productos_eliminar($id)==1){
        header("location: http://localhost/Proyectos/LenguajeProgramacionVisual/inventario.php");
    }else{
        echo "fallo al agregar";
    }

?>
