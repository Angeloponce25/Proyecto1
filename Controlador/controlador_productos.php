<?php
include '../modelo/modelo_productos.php';

if(isset($_GET['CargarProductos'])) {
  
    $sql = CargarProductos($_GET);
    return $sql;

}

if(isset($_POST['crearProductos'])) {
  
    $sql = crearProductos($_POST);
    return $sql;

}
if(isset($_POST['EliminarProducto'])) {
  
    $sql = EliminarProducto($_POST);
    return $sql;

}


?>