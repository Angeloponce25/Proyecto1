<?php
include '../modelo/modelo_productos.php';

if(isset($_POST['CargarProductos'])) {
  
    $sql = CargarProductos($_POST);
    return $sql;

}

?>