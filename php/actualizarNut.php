<?php 

include_once("../crud/crudSup.php");

$id = $_POST["id"];
$nombreu = $_POST["nomU"];
$app = $_POST["app"];
$apm = $_POST["apm"];
$correo = $_POST["correo"];
$tel = $_POST["cel"];
$fechan = $_POST["fechaN"];
$sexo = $_POST["sexo"];
$pass = $_POST["pass"];

function calcularEdad($fechan) {
    $fechan = new DateTime($fechan);
    $hoy = new DateTime();
    $edad = $hoy->diff($fechan)->y;
    return $edad;
}

function esMayorDeEdad($edad) {
    return $edad >= 18;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la fecha de nacimiento del formulario
    $fechan = $_POST["fechaN"];

    // Calcular la edad
    $edad = calcularEdad($fechan);
    if (esMayorDeEdad($edad)) {
if (empty($nombreu)|| empty($app)|| empty($apm)|| empty($correo)|| empty($tel) || empty($fechan) || empty($sexo) || empty($pass)) {
    echo '<br><h2>No ingresaste datos</h2>';

}else {
   
    echo "<br>Nombre: $nombreu";
    echo "<br>App: $app";
    echo "<br>Apm: $apm";
    echo "<br>Correo: $correo";
    echo "<br>Tel: $tel";
    echo "<br>Fecha de nacimiento: $fechan";
    echo "<br>Sexo: $sexo";
    echo "<br>Pass: $pass";

    $objSupnat = new SupAlta($id,$nombreu,$app,$apm,$correo,$tel,$fechan,$sexo,$pass);
    $crud = new crudSup();
    $crud->actualizarnut($objSupnat);
       
        }
        
    } else {

        echo "No es mayor de edad.";
     
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
</head>
<body>
    <a href="UsuariosAdmin.php"><br>Regresar</a>
</body>
</html>