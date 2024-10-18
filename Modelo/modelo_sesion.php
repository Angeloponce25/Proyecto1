<?php


function iniciarSesion($parametro)
{

    include '../conexion.php';    
    $usuario = $parametro['usuario'];
    $password = md5($parametro['password']);
    $consulta = "SELECT usuario, password FROM usuarios WHERE usuario ='$usuario' AND password ='$password'";
    



}
?>