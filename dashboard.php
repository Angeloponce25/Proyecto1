<?php session_start(); ?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /*INTEGRANTEES: Joshua Corzo, Franco Coila, Fernando Civincha, Sebastian Basurco*/
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .barraL {
            width: 200px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }
        .barraL h2 {
            margin-top: 0;
        }
        .barraL ul {
            list-style-type: none;
            padding: 0;
        }
        .barraL li {
            margin-bottom: 10px;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .bievendiobanner {
            background-color: #3498db;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .stadis-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stadis-box {
            background-color: #2ecc71;
            color: white;
            padding: 15px;
            border-radius: 5px;
            flex-basis: 30%;
        }
        .stadis-box:nth-child(2) {
            background-color: #e74c3c;
        }
        .stadis-box:nth-child(3) {
            background-color: #f39c12;
        }
        .lineadetiempo, .formulario, .Transacciones, .recent-activity {
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #bdc3c7;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="barraL">
        <h2>Admin Panel</h2>
        <ul>
            <li>Dashboard</li>
            <li>Usuarios</li>
            <li>Reportes</li>
            <li>Configuración</li>
            <li>Cerrar Sesión</li>
        </ul>
    </div>
    <div class="main-content">
        <div class="bievendiobanner">
            <h2>Bienvenido, <?php echo $_SESSION['cliente']; ?></h2>
            <p>Última sesión: 18 de septiembre, 2024</p>
        </div>
        <div class="stadis-container">
            <div class="stadis-box">
                <h3>Usuarios Activos</h3>
                <p>150</p>
            </div>
            <div class="stadis-box">
                <h3>Nuevas Ventas</h3>
                <p>75</p>
            </div>
            <div class="stadis-box">
                <h3>Tareas Pendientes</h3>
                <p>12</p>
            </div>
        </div>
        <div class="lineadetiempo">
            <h3>Línea de Tiempo</h3>
            <ul>
                <li>18/09/2024: Inicio de sesión del usuario Juan Pérez</li>
                <li>17/09/2024: Compra realizada por Ana Martínez por $340</li>
                <li>16/09/2024: Tarea completada por Carlos Ruiz</li>
            </ul>
        </div>
        <div class="formulario">
            <h3>Formulario de Contacto</h3>
            <form>
                <input type="text" placeholder="Tu nombre">
                <input type="email" placeholder="Tu correo electrónico">
                <textarea placeholder="Tu mensaje"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="Transacciones">
            <h3>Últimas Transacciones</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>$120.00</td>
                    <td>18/09/2024</td>
                    <td>Completado</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Martínez</td>
                    <td>$340.00</td>
                    <td>18/09/2024</td>
                    <td>Completado</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Carlos Ruiz</td>
                    <td>$75.00</td>
                    <td>18/09/2024</td>
                    <td>Pendiente</td>
                </tr>
            </table>
        </div>
        <div class="ActvidadReciente">
            <div style="display: flex; justify-content: space-between;">
                <div style="flex: 1; margin-right: 10px;">
                    <h3>Últimas Compras</h3>
                    
                    <ul>
                        <li>Compra #1 - $120.00 - 18/09/2024</li>
                        <li>Compra #2 - $340.00 - 17/09/2024</li>
                        <li>Compra #3 - $75.00 - 16/09/2024</li>
                        <li>Compra #4 - $500.00 - 15/09/2024</li>
                    </ul>
                </div>
                <div style="flex: 1; margin-left: 10px;">
                    <h3>Últimos Usuarios Logueados</h3>
                    <ul>
                        <li>Usuario: Juan Pérez - 18/09/2024</li>
                        <li>Usuario: Ana Martínez - 17/09/2024</li>
                        <li>Usuario: Carlos Ruiz - 16/09/2024</li>
                        <li>Usuario: Laura Gómez - 15/09/2024</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>