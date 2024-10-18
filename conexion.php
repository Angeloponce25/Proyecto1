<?php
$bd_host = "localhost";
$bd_usuario = "root";
$bd_pass = "";
$bd_base = "proyecto1";

$conexion = new mysqli($bd_host,$bd_usuario,$bd_pass,$bd_base);
if ($conexion->connect_error)
{
    die();
}





?>