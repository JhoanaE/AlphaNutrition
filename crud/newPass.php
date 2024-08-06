<?php
include_once('crudSup.php');

// Crear una instancia de crudSup
$crud = new crudSup();

// Actualizar la contraseña de un usuario
$nombreU = 'usuario123';
$nuevaPass = 'nuevaPassword123';
$crud->NuevaPass($nombreU, $nuevaPass);
?>
