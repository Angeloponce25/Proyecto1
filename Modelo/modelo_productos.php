<?php

session_start();

function CargarProductos($parametro)
{
include '../conexion.php';
$consulta = "SELECT idproducto,descripcion,fecha,estado,pcompra,pventa,stock FROM productos WHERE estado='1'";
$array_productos = array();
$ejecutar = $conexion->query($consulta);
while($recorre = $ejecutar->fetch_assoc())
    {
        $array_productos[] = $recorre;
    }
    echo json_encode($array_productos);

}
function crearProductos($r)
{
    include '../conexion.php';
    $descripcion = $r['descripcion'];
    $fecha = $r['fecha'];
    $estado = $r['estado'];
    $precio_compra = $r['precio_compra'];
    $precio_venta = $r['precio_venta'];
    $stock = $r['stock'];
    $consulta = "INSERT INTO productos (descripcion,fecha,estado,pcompra,pventa,stock) 
                 VALUES ('$descripcion','$fecha','$estado','$precio_compra','$precio_venta','$stock')"; 
    $ejecutar2 = $conexion->query($consulta);
    echo 'SI';
}
function EliminarProducto($r)
{
    include '../conexion.php';
    $id = $r['id'];
    $consulta = "UPDATE productos SET estado='0' WHERE idproducto='$id'";
    $ejecutar2 = $conexion->query($consulta);
}
?>