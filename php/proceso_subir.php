<?php
include_once('../crud/crudSup.php');


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$codigo=$_POST['codigo_producto'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];
$fecha=$_POST['fecha_caducidad'];
$precio=$_POST['precio'];
$foto = $_FILES['foto'];
$foto_nombre = $foto['name'];
$foto_tmp = $foto['tmp_name'];
$foto_destino = '../img/' . $foto_nombre;

    

//$carpeta = "imgs/";
//$ruta = $carpeta.basename($_FILES["foto"]["name"]);

if (move_uploaded_file($foto_tmp,$foto_destino) ){
    $ObjSup=new SupProd(1,$nombre,$codigo,$descripcion,$cantidad,$fecha,$precio,$foto_destino);
    $crud= new crudSup();
    $crud->subirProd($ObjSup);
    
 echo "<br> Foto subida correctamente";
}else {
    echo "<script>console.error('Ocurrió un error, la foto no se subió.');</script>";
}

 