<?php
    include_once('CRUDnutri.php');

    $idDieta = $_POST['id_dieta'];

    $objcrud = new crudNutri();
    $statement = $objcrud->eliminarDieta($idDieta);
?>