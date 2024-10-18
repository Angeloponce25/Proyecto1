<?php
 include '../conexion.php';    

function iniciarSesion($parametro)
{

   
    $usuario = $parametro['usuario'];
    $password = md5($parametro['password']);
    $consulta = "SELECT usuario, password FROM usuarios 
    WHERE usuario ='$usuario' AND password ='$password'";
    echo $consulta;



}
?>