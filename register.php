<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #8a216f, #0e2c6d);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
    }

    .contenedor-principal {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 300px;
    }

    .contenedor-principal img {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        margin-bottom: 20px;
    }

    .contenedor-principal h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .contenedor-principal input[type="text"],
    .contenedor-principal input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .contenedor-principal input[type="submit"] {
        width: 50%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        border-radius: 10px;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .contenedor-principalinput[type="submit"]:hover {
        background-color: #0056b3;
    }

    .contenedor-principal a {
        display: block;
        margin-top: 10px;
        font-size: 14px;
        color: #007bff;
        text-decoration: none;
    }

    </style>
</head>
<body>
    <div class="contenedor-principal">
        <img src="https://i.etsystatic.com/21694529/r/il/5cb395/2177520509/il_600x600.2177520509_di2w.jpg" alt="Logo"> 
        <h2>Bienvenido</h2>
        <p>Formulario de Registro</p>
        <form id="registerForm">
            <input type="text" id="usuario" name="usuario" placeholder="Correo Electrónico" >
            <input type="password" id="password" name="password" placeholder="Contraseña" >
            <input type="password" id="password2" name="password2" placeholder="Repetir Contraseña" >
            <input type="submit" value="Registrarse">
        </form>
        <div id="mensaje_error"></div>
        <a href="index.php">Iniciar Sesion</a>
    </div>
</body>
</html>
<script>
    document.getElementById('registerForm').onsubmit = function(event) {
            event.preventDefault(); // Evita el envío del formulario y recarga de la página
            
            // Obtener valores de los campos
            var usuario = document.getElementById('usuario').value;
            var password = document.getElementById('password').value;
            var password2 = document.getElementById('password2').value;

            if(usuario=='')
            {
                document.getElementById('mensaje_error').innerHTML='<center>Ingrese el usuario</center>';
            }
            if(password=='')
            {		
                document.getElementById('mensaje_error').innerHTML='<center>Ingrese la contrase\u00F1a</center>';
            }
            if(password != password2)
            {
                document.getElementById('mensaje_error').innerHTML='<center> Las contrasenas no son iguales</center>';
            }
            else
            {
                var parametros = {
                    registrarUsuario:1,
                    usuario:usuario,
                    password:password
                };
                $.ajax({
                url: "Controlador/controlador_sesion.php",
                type: "POST",
                data: parametros,
                dataType: "html",
                success: function (datos)
                {
                        document.getElementById('mensaje_error').innerHTML='<center>'+datos+'</center>';
                    }
                });

            }
             

        };
</script>