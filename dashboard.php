<?php session_start(); ?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
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
            <li><button onClick="CerrarSesion();">Cerrar Sesión</button></li>
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
            <form id="FormularioProducto">
                <label for="descripcion">Descripcion</label>
                <input type="text" id="txtdescripcion" name="txtdescripcion" placeholder="descripcion del Producto">
                <label for="fecha">Fecha</label>
                <input type="date" id="txtfecha" name="txtfecha">
                <label for="estado">Estado</label>
                <select name="txtEstado" id="txtEstado">
                    <option value="1">Activo</option>
                    <option value="2">Desactivado</option>
                </select>
                <br>                
                <label for="precio_compra">Precio Compra</label>
                <input type="number" id="txtprecio_compra" name="txtprecio_compra">
                <label for="precio_venta">Precio Venta</label>
                <input type="number" id="txtprecio_venta" name="txtprecio_venta">
                <label for="stock">Stock</label>
                <input type="number" id="txtstock" name="txtstock">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div class="Transacciones">
            <h3>Últimas Transacciones</h3>
            <div id="ejemplo"></div>

            <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>P. Compra</th>
                            <th>P. Venta</th>
                            <th>Stock</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
            
                    <tbody>
                    </tbody>
            
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>P. Compra</th>
                            <th>P. Venta</th>
                            <th>Stock</th>
                            <th>Accion</th>
                        </tr>
                    </tfoot>
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
<script>
    document.getElementById('FormularioProducto').onsubmit = function(event) 
    {
        event.preventDefault();
        var descripcion = document.getElementById('txtdescripcion').value;
        var fecha = document.getElementById('txtfecha').value;
        var estado = document.getElementById('txtEstado').value;
        var precio_compra = document.getElementById('txtprecio_compra').value;
        var precio_venta = document.getElementById('txtprecio_venta').value;
        var stock = document.getElementById('txtstock').value;
        var parametros = 
        {
            crearProductos:1,
            descripcion:descripcion,
            fecha:fecha,
            estado:estado,
            precio_compra:precio_compra,
            precio_venta:precio_venta,
            stock:stock
        }
        $.ajax({
	       url: "Controlador/controlador_productos.php",
		   type: "POST",
		   data: parametros,
     	   dataType: "html",
		   success: function (datos)
           {
                if(datos=='SI')
                {
                    console.log('correcto');
                    $('#example').DataTable().ajax.reload();
                }
                else
                {
                    console.log('error');
                }
			}
		   }); 
    }



    $(document).ready(
        function()
        {
            CargarProductos();
        }
    );


    function CerrarSesion()
    {
        var parametros = 
        {
            cerrarSesion:1
        };

        $.ajax({
            url: "Controlador/controlador_sesion.php",
            type: "POST",
            data: parametros,
            dataType: "html",
            success: function (datos)
            {
                if(datos=='SI')
                    {
                     window.location.href="index.php";   
                    }
                    else
                    {
                        console.log('error');
                    }
            }
        }
        );
    }
    function CargarProductos()
    {
        var parametros = 
        {
            CargarProductos:1
        };

        $.ajax({
            url: "Controlador/controlador_productos.php",
            type: "POST",
            data: parametros,
            dataType: "html",
            success: function (datos)
                {
                    document.getElementById('ejemplo').innerHTML=datos;
                }
            }
            );
        }
    $(function () {
        var tabla=$('#example').DataTable(
            {
                "ajax":
                {
                    "url": 'Controlador/controlador_productos.php',
                    "method": 'GET',
                    "data":
                    {
                        "CargarProductos":1,
                    },
                    "dataSrc":""  
                },
                "columns":
                [
                    {"data":"idproducto"},
                    {"data":"descripcion"},
                    {"data":"estado"},
                    {"data":"pcompra"},
                    {"data":"pventa"},
                    {"data":"stock"},
                    {
                        "data": null,
                        "render": function(data, type, row, meta) {
                            return `
                                <button class="btn btn-danger" onclick="EliminarProducto(${row.idproducto})">Eliminar</button>
                            `;
                        }
                    }

                ],
                dom:'Bfrtip', //habilitar la barra de botones
                buttons:
                [
                    {
                        extend:'excelHtml5',
                        text:'A excel',
                        title:'Lista de Productos'
                    },
                    {
                        extend:'pdfHtml5',
                        text:'A pdf',
                        title:'Lista de Productos'
                    },
                    {
                        extend:'print',
                        text:'Imprimir',
                        title:'Lista de Productos'
                    },
                ]
            }
        );

    });

    function EliminarProducto(id) 
    {
        alert(id);    
    }
</script>



