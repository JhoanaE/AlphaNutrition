<?php 

include_once("../crud/crudSup.php");

$nombreu = $_POST["nombreu"];
$pass = $_POST["newPass"];


if (empty($nombreu)|| empty($pass)){
    echo '<br><h2>No ingresaste datos</h2>';

  
}else {

    if ($nombreu && $pass) {
        $crud = new crudSup();
        $crud->cambiarPassword($nombreu,$pass);
    } else {
      echo "Los datos no existen";
    }
   
}