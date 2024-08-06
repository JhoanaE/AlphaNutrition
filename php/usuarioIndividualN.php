<?php
include_once('../crud/crudsup.php');

$nombreu= $_POST['namu'];

$crud = new crudSup();
$crud->buscarN($nombreu);
$statement = $crud->buscarN($nombreu);
$res = $statement->rowCount();
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_interfaces_usuarios.css">
    
    <title>Actualizar Nutricionista</title>
</head>
<body>
    
</body>
</html>
<header class="section_container header_container">
<div class="header_content">
            <span class="bg_blur"></span>
            <span class="bg_blur header_blur"></span>
            <div class="contenido">
<table class="mostrar-Usuarios">
                  
                    <?php
         
        if ($res) {
            $resulset = $statement->fetchAll(PDO::FETCH_OBJ);
            foreach($resulset as $usuario){
                echo "
                
         
            <tr>
            <th>Id_Cliente </th>
            <th>".$usuario->id_cliente."</th>
            </tr>
            <tr>
            <th>Nombre usuario </th>
            <th>".$usuario->nombreu."</th>
            </tr>
            <tr>
         
            <th>Nombre </th>
            <th>".$usuario->nombre."</th>
            </tr>
            <tr>
           
            <th>ApellidoP Usuario</th>
            <th>".$usuario->app."</th>
            </tr>
            <tr>
           
            <th>ApellidoM Usuario</th>
            <th>".$usuario->apm."</th>
            </tr>
            <tr>
           
            <th>Correo</th>
            <th>".$usuario->correo."</th>
            </tr>
            <tr>
            
            <th>Telefono</th>
            <th>".$usuario->tel."</th>
            </tr>
            <tr>
         
            <th>Fecha Nacimiento</th>
            <th>".$usuario->fechan."</th>
            </tr>
            <tr>
            
            <th>Sexo</th>
            <th>".$usuario->sexo."</th>
            </tr>
            <tr>
            
            <th>Password</th>
            <th>".$usuario->pass."</th>
            </tr>
            <tr><th><a href='../html/actualizarCliente.html' class='eliminarlink'>Actualizar</a></th></tr>
            <tr><th><a href='eliminarUsuario.php?num=$usuario->id_cliente' class='eliminarlink'>Dar de baja</a></th></tr>

                
                ";
            }
        } else {
            echo "
                <tr>
                <th colspan='9'>
                    <marquee behavior='' direction=''>NO HAY REGISTROS</marquee>
                </th>
            </tr> 
                ";
        }
        ?>
                </table>
                </div>
                </div>
    </header>