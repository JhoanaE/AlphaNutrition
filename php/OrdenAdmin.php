<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleA.css">
    <title>Alpha Nutririon</title>
</head>

<body class="">
 
        <nav>
            <div class="nav_logo">
                <a href="#"><img src="../img/Logo2.0.png" alt="Logo"></a>
            </div>

            <
            <ul class="nav_links">
                <li class="link"><a href="./productosAdmin.php">Productos</a></li>
                <li class="link"><a href="./OrdenAdmin.php">Órdenes</a></li>
                <li class="link"><a href="UsuariosAdmin.php">Usuarios</a></li>
            </ul>
            <a href="./registrar_admin.php"><button class="btn">Únete Ahora</button></a>
        </nav>
        <header class="section_container">
            <div class="header_content">
                <span class="bg_blur"></span>

                <h1>Administrar Ordenes</h1>
                <h4>Visualizar y eliminar Ordenes.</h4>

            </div>

        </header>

        <div id="Orden">
            <h2>Ordenes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id del Orden </th>
                        <th>Id del Cliente </th>
                        <th>id producto </th>
                        <th>Colonia</th>
                        <th>Municipio</th>
                        <th>Codigo Postal</th>
                        <th>No. Interno</th>
                        <th>No. Externo</th>
                        <th>Referencia</th>
                        <th>Tiempo llegada</th>
                        <th>Tiempo entrega</th>
                    </tr>
                </thead>
            </table>
        </div><br>

        <div id="verO">
            <h2>Ver Orden</h2>
            <form action="">
                <table>
                    <div>
                        <tr>
                            <td>
                                <label for="">Id Orden</label>
                                <input type="number" required>
                            </td>
                            <td>
                                <button class="btn-crud" type="submit">Buscar</button>
                            </td>
                            <table>
                                <thead>
                                    <tr><br><br>
                                        <th>Id del Orden </th>
                                        <th>Id del Cliente </th>
                                        <th>id producto </th>
                                        <th>Colonia</th>
                                        <th>Municipio</th>
                                        <th>Codigo Postal</th>
                                        <th>No. Interno</th>
                                        <th>No. Externo</th>
                                        <th>Referencia</th>
                                        <th>Tiempo llegada</th>
                                        <th>Tiempo entrega</th>
                                    </tr>
                                </thead>
                            </table>
                </table>
            </form>
        </div><br>

        <div id="Eliminar">
            <span class="bg_blur header_blur"></span>
            <table>
            <h2>Eliminar Orden</h2>
            <form action="">
                <div>
                    <tr>
                        <td>
                            <label for="">Id de la Orden</label><br>
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

    <script>

    //Validacion para evitar espacios pero si datos alfanumericos

    document.querySelectorAll('.alfanum').forEach(input => {
        input.addEventListener('input', function(event) {
        event.target.value = event.target.value.replace(/\s+/g, '');
    });
});

        //Validacion para evitar espacios y solo datos alfabeticos

        document.querySelectorAll('.alfa').forEach(input => {
        input.addEventListener('input', function(event) {
        event.target.value = event.target.value.replace(/[^a-zA-Z]/g, '');
        event.target.value = event.target.value.replace(/\s+/g, '');
    });
});

        //Validacion que solo permite 10 digitos para un número de télefono
        
        const phoneInputs = document.querySelectorAll('.phoneNumber');
        phoneInputs.forEach(input => {
            input.addEventListener('input', function(event) {
                let value = event.target.value;
                if (value.length > 10) {
                    event.target.value = value.slice(0, 10);
                }
                event.target.value = event.target.value.replace(/[^0-9]/g, '');
            });
        });

    </script>

</body>

</html>