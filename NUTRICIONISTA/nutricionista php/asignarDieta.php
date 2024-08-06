<?php
include_once('CRUDnutri.php');

    $nombreu = $_POST['nombreu'];
    $app = $_POST['app'];
    $nomDieta = $_POST['nombre_dieta'];
    $descripcion = $_POST['descripcion'];

    if(empty($nombreu) || empty($app) || empty($nomDieta) || empty($descripcion)){
        echo "<br>error no se asignaron nada";
        echo '<a href="../nutricionista html/AsignarD.html"><br>VOLVER</a>';
    }else{
        $objcrud = new CRUDnutri();
        $idDieta = $objcrud->guardarDieta($nomDieta,$descripcion);
        $objcrud->asignarDieta($nombreu, $app, $idDieta);
    }

