<?php
include_once('../crud/crudSup.php');

$id = $_REQUEST ['num'];

$crud = new crudSup();
$crud->eliminarAdmi($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Admin</title>
</head>
<body>
    <a href="UsuariosAdmin.php"><br>Regresar</a>
</body>
</html>