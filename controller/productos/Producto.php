<?php


class Producto
{

    /**
     * Producto constructor.
     */

    public function productos_eliminar($id)
    {
        $conexion = new Conectar();


        $sql = "DELETE from productos WHERE id_producto='$id'";

        return $result = mysqli_query($conexion->conexion(), $sql);
    }

    public function getAllProducts()
    {
        $conexion = new Conectar();//constructor de la clase

        $query_productos = "SELECT prod.id, prod.nombre, prod.precio,
               (SELECT cat.descripcion
                FROM categoria_productos AS cat
                WHERE prod.id_categoria = cat.id_categoria )AS categoria
        FROM productos AS prod";


        return mysqli_query($conexion->conexion(), $query_productos);
    }

    public function getProducto($id){
        $conexion = new Producto();

        $producto = "SELECT prod.id_producto, prod.descripcion, prod.precio,
               (SELECT cat.descripcion
                FROM categoria_productos AS cat
                WHERE prod.id_categoria = cat.id_categoria )AS categoria
        FROM productos AS prod WHERE prod.id_producto='$id'";
    }

}
?>