<?php

$id=$_GET['id'];

require_once "../Conectar.php";
require_once "Categoria.php";

$categoria = new Categoria();
if($categoria->categoria_eliminar($id)==1){
    header("location: http://localhost/Proyectos/LenguajeProgramacionVisual/categorias.php");
}else{
    echo "fallo al eliminar";
}

?>
