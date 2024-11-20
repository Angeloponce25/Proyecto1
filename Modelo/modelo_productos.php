<?php

session_start();

function CargarProductos($parametro)
{
include '../conexion.php';
$consulta = "SELECT idproducto,descripcion,fecha,estado,pcompra,pventa,stock FROM productos";
$array_productos = array();
$ejecutar = $conexion->query($consulta);
while($recorre = $ejecutar->fetch_assoc())
    {
        $array_productos[] = $recorre;
    }
    echo json_encode($array_productos);

}

?>