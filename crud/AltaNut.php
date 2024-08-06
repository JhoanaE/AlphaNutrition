<?php 

include_once("crudSup.php");

$nombreu = $_POST["nomu"];
$nombre = $_POST["nom"];
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

    // Validar la edad
    if (esMayorDeEdad($edad)) {
        if (empty($nombreu)|| empty($nombre)||empty($app)|| empty($apm)|| empty($correo)|| empty($tel) || empty($fechan) || empty($sexo) || empty($pass)) {
            echo '<script>alert("No ingresaste todos los datos."); window.history.back();</script>';
        
        }else {

            $objSupnat = new SupAlta(1,$nombreu,$nombre,$app,$apm,$correo,$tel,$fechan,$sexo,$pass);
            $crud = new crudSup();
            $crud->altaNut($objSupnat);
          
        }
        
    } else {
        
        echo '<script>alert("No es mayor de edad."); window.history.back();</script>';
   
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
    <a href="../php/UsuariosAdmin.php"><br>Regresar</a>
</body>
</html>
