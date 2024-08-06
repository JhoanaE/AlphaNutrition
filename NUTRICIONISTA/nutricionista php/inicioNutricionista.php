
<?php
    include_once('CRUDnutri.php');

    $objcrud = new crudNutri();
    $statement = $objcrud->verRegistros();
    $res = $statement->rowCount();
    //echo "<br>".$res;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesInicio.css">
    <link rel="stylesheet" href="../styleTabl.css">
    <title>Nutricionista</title>
</head>
<body>
    <div class="container">
        <nav>
            <div class="nav_logo">
                <a href="#"><img src="../img/Logo2.0.png" alt="Logo"></a>
            </div>

            <ul class="nav_links">
                <li class="link"><a href="../nutricionista html/AsignarD.html">Asignar Dieta</a></li>
                <li class="link"><a href="../nutricionista html/BusquedaCliente.html">Buscar Cliente</a></li>
                <li class="link"><a href="../nutricionista html/eliminarD.html">Eliminar Dieta</a></li>
            </ul>
        </nav>
        <header class="section_container ">
            <div class="header_content">
                <center><h1>Clientes Registrados</h1></center>
            </div>
        </header>
        <div>
            <table align="center" border="1">
                <thead>
                    <tr>
                        <th>Id Cliente</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Genero</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if ($res>0) {
                        $resultset = $statement->fetchAll(PDO::FETCH_OBJ);
                        foreach($resultset as $cliente){
                            echo "<tr>
                                    <td>".$cliente->id_cliente."</td>
                                    <td>".$cliente->nombreu."</td>
                                    <td>".$cliente->app."</td>
                                    <td>".$cliente->apm."</td>
                                    <td>".$cliente->sexo."</td>
                                </tr>";
                        }
                    } else {
                        echo "<tr>
                                <td colspan='6'>
                                    <marquee behavior='' direction=''>No esta registrado</marquee>
                                </td>
                            </tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>