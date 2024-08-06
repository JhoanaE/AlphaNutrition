<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleA.css">
    <title>Alpha Nutririon</title>
</head>

<body>
    <div class="container">
       
        <nav>
            <div class="nav_logo">
                <a href="#"><img src="../img/Logo2.0.png" alt="Logo"></a>
            </div>

            
            <ul class="nav_links">
                <li class="link"><a href="./productosAdmin.php">Productos</a></li>
                <li class="link"><a href="./OrdenAdmin.php">Órdenes</a></li>
                <li class="link"><a href="./UsuariosAdmin.php">Usuarios</a></li>
            </ul>
            <a href="./registrar_admin.php"><button class="btn">Únete Ahora</button></a>
        </nav>
        <header class="section_container ">
            <div class="header_content">

                <h1>Administrar Productos</h1>
                <h4>Agregar, editar y eliminar productos.</h4>

            </div>

        </header>

        <div id="Inventario">
            <h2>Inventario</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id del Producto </th>
                        <th>Nombre del Producto </th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Cantidad(kg o gr)</th>
                        <th>Fecha Caducidad</th>
                        <th>Unidades</th>
                        <th>Precio</th>
                    </tr>
                </thead>
            </table>
        </div><br>

        <div id="Actualizar">
            <h2>Actualizar Inventario</h2>
            <form action="">
                <table>
                    <div>
                        <tr>
                            <td>
                                <label for="">Id del Producto</label>
                                <input type="number" required>
                            </td>
                            <td>
                                <label for="">Nombre del Producto</label>
                                <input type="text" required>
                            </td>
                            <td>
                                <label for="">Codigo Producto</label>
                                <input type="number" required>
                            </td>
                            <td>
                                <label for="">Descripción</label>
                                <input type="text" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Cantidad</label>
                                <input type="number" required>
                            </td>
                            <td>
                                <label for="">Fecha Caducidad</label>
                                <input type="date" required>
                            </td>
                            <td>
                                <label for="">Unidades</label>
                                <input type="number" required>
                            </td>
                            <td>
                                <label for="">Precio</label>
                                <input type="number" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"> <center> <button class="btn-crud" type="submit">Actualizar</button></center></td>
                          
                          
                        </tr>
                </table>
            </form>
        </div><br>

        <div id="Agregar">
            <h2>Agregar Producto</h2>
            <form action="proceso_subir.php" method="POST">
                <table>
                    <div>
                        <tr>
                            <td>
                                <label for="">Id del Producto</label><br>
                    <input name="id" type="number"  required>
                            </td>
                            <td>
                                <label for="">Nombre del Producto</label><br>
                    <input name="nombre" type="text" required>
                            </td>
                            <td>
                                <label for="foto">Foto</label><br>
                                 <input name="foto" type="file" required>
                            </td>
                            <td>
                                <label for="">Codigo Producto</label><br>
                                <input name="codigo_producto" type="number" required>
                            </td>
                            <td>
                                <label for="">Descripción</label><br>
                    <input name="descripcion" type="text" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Cantidad</label><br>
                                <input name="cantidad" type="number" required>
                            </td>
                            <td>
                                <label for="">Fecha Caducidad</label><br>
                                <input name="fecha_caducidad" type="date" required>
                            </td>
                            <td>
                                <label for="">Precio</label><br>
                    <input name="precio" type="number" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"> <center><button class="btn-crud" type="submit">Agregar</button></center></td>
                           
                          
                        </tr>
                </table>
            </form>
        </div><br>
        
        <div id="Eliminar">
            <table>
            <h2>Eliminar Producto</h2>
            <form action="">
                <div>
                    <tr>
                        <td>
                            <label for="">Id del Producto</label><br>
                            <input type="number" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center><button class="btn-crud" type="submit">Eliminar</button></center>
                        </td>
                    </tr>
            </table>
            </form>
        </div>
    </div>
</body>

</html>