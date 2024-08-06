<?php
    include_once('CRUDnutri.php');

    $nombreu = $_POST['nombreu'];

    $objcrud = new crudNutri();
    $statement = $objcrud->busqueda($nombreu);
    $res = $statement->rowCount();
    //echo "<br>".$res;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleNut.css">
    <title>NUTRICIONISTA</title>
</head>
<body>
    <div>
        <h1  align="center">Gestor de Dietas</h1><br>
        <table align="center">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Peso</th>
                    <th>Alergia</th>
                    <th>Enfermedad Cronica</th>
                    <th>Actividad Deportiva</th>
                    <th>Tiempo Resultados</th>
                    <th>Objetivo</th>
                    <th>Id Dieta</th>
                    <th>Dieta</th>
                    <th>descripcion</th>
                    </tr>
            </thead>
            <tbody>
            <?php
            if ($res>0) {
                $resultset = $statement->fetchAll(PDO::FETCH_OBJ);
                foreach($resultset as $cliente){
                    echo "<tr>
                            <td>".$cliente->nombreu."</td>
                            <td>".$cliente->app."</td>
                            <td>".$cliente->apm."</td>
                            <td>".$cliente->sexo."</td>
                            <td>".$cliente->edad."</td>
                            <td>".$cliente->peso."</td>
                            <td>".$cliente->alergia."</td>
                            <td>".$cliente->enfermedad_c."</td>
                            <td>".$cliente->act_deportiva."</td>
                            <td>".$cliente->tiempo_res."</td>
                            <td>".$cliente->objetivo."</td>
                            <td>".$cliente->id_dieta."</td>
                            <td>".$cliente->nombre_dieta."</td>
                            <td>".$cliente->descripcion."</td>
                        </tr>";
                }
            } else {
                echo "<tr>
                        <td colspan='14'>
                            <marquee behavior='' direction=''>No esta registrado</marquee>
                        </td>
                      </tr>";
            }
            ?>
            <tr>
                <td colspan="14">
                        <center><a href="../nutricionista html/AsignarD.html"><button class="btn" type="submit">Asignar Dieta</button></a>
                        <a href="../nutricionista html/ActualizarD.html"><button class="btn" type="submit">Actualizar Dieta</button></a>
                        <a href="../nutricionista html/eliminarD.html"><button class="btn" type="submit">Eliminar Dieta</button></a></center>
                </td>
            </tr>
            <tr>
                <td colspan="14">
                    <center><a href="./inicioNutricionista.php"><button class="btn" type="submit">REGRESAR INICIO</button></a></center>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
