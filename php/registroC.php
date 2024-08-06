<?php
include_once('../crud/crudSup.php');

$nombreU = $_POST['nombreU'];
$pass = $_POST['pass'];

echo "<br> Procesando Busqueda... <br>Usuario: $nombreU<br>Contraseña: $pass";

$crud = new CrudSup();

$statement = $crud->validarSesion($nombreU,$pass);
$res = $statement->rowCount();
//echo "<br>".$res;

if ($res > 0) {
    //echo "<br> Usuario Registrado...";
    //echo "<h5 align='center'>
    //<a href='./usuarioRegistrado.php'>Bienvenido</a>
    //</h5>";
    header("location:./formulario.php");
} else {
    //echo "<br> Usuario no Registrado...";
    //echo "<h3 align='center'>
    //<a href='./inicioSesion.php'>Volver a Inicio de Sesion</a>
    //</h3>";
    header("location:./indexUsuario.html");

}