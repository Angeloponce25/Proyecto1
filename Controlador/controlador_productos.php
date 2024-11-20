<?php
include '../modelo/modelo_productos.php';

if(isset($_GET['CargarProductos'])) {
  
    $sql = CargarProductos($_GET);
    return $sql;

}

?>