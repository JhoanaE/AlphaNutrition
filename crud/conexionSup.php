<?php

include_once('datosBD.php');

class Conexion{
    private $serv = servidor;
    private $user = usuario;
    private $password = contra;
    private $base = bd;
    private $port = puerto;
    private $conexionBD;

    function __construct(){
        try{
            $dsn = "mysql:host=$this->serv;port=$this->port;dbname=$this->base";
            $this->conexionBD = new PDO($dsn, $this->user, $this->password);
            $this->conexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "<br> CONECTADO a Sup_Nat <br>";

        } catch (PDOException $error) {
            echo "<br>ERROR : $error";
        }
    }

    function getconexionBD(){
        return $this->conexionBD;
    }
}

$terreno = new Conexion();
?>
