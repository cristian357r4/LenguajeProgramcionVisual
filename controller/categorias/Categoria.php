<?php


class Categoria
{
    public function categoria_eliminar($id){
        $conexion = new Conectar();
        $sql = "DELETE from categoria_productos WHERE id_categoria='$id'";

        return $result = mysqli_query($conexion->conexion(), $sql);

    }

    public function getAllCategorias(){
        $conexion = new Conectar();//constructor de la clase

        $query_categorias = "SELECT cat.id_categoria, cat.descripcion
                FROM categoria_productos AS cat";

        return mysqli_query($conexion->conexion(), $query_categorias);

    }

}

?>