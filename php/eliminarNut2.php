<?php
include_once('../crud/crudSup.php');

$id = $_POST ['id'];

$crud = new crudSup();
$crud->eliminarNut($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar nutricionista</title>
</head>
<body>
    <a href="UsuariosAdmin.php"><br>Regresar</a>
</body>
</html>