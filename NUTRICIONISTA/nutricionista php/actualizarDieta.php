<?php
    include_once('CRUDnutri.php');

    $id = $_POST['id_dieta'];
    $nomDieta = $_POST['nombre_dieta'];
    $descripcion = $_POST['descripcion'];

    $objDieta = new Dieta($id,$nomDieta,$descripcion);
    $objcrud = new crudNutri();
    $objcrud->actualizarDieta($objDieta); 
?>

