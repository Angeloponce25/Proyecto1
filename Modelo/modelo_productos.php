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

    echo '<table>
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Compra</th>
                    <th>Venta</th>
                    <th>Stock</th>
                </tr></table>';
                
    foreach($array_productos as $productos)
    {
        
        echo $productos['descripcion'];   
    }

}

?>