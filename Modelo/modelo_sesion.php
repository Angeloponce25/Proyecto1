<?php

session_start();

function iniciarSesion($parametro)
{
    include '../conexion.php';
    $usuario = $parametro['usuario'];
    $password = md5($parametro['password']);
    $consulta = "SELECT usuario, password FROM usuarios 
    WHERE usuario ='$usuario' AND password ='$password'";
    $ejecutar = $conexion->query($consulta);

    if($ejecutar->num_rows > 0)
    {
        echo 'SI';
        $_SESSION['cliente'] = $usuario;
    }
    else
    {
        echo 'NO';
    }

}
function registrarUsuario($parametro)
{
include '../conexion.php';
$usuario = $parametro['usuario'];
$password = md5($parametro['password']);
//VALIDAR SI EXSITE
$consulta_validar = "SELECT usuario, password FROM usuarios 
    WHERE usuario ='$usuario' AND password ='$password'";
    $ejecutar = $conexion->query($consulta_validar);

    if($ejecutar->num_rows > 0)
    {
        echo 'Existe';
    }
    else
    {       
    $consulta = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')"; 
    $ejecutar2 = $conexion->query($consulta);
    echo 'No Existe';
    }
}
function cerrarSesion($parametro)
{
    echo 'SI';
    session_destroy();
}


?>