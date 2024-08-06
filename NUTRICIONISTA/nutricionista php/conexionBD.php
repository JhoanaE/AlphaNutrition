<?php
    include_once('datosBD.php');

    class Conexion{
        private $server = servidor;
        private $user = usuario;
        private $pass = contraseña;
        private $base = bd;
        private $port = puerto;
        private $conexionBD;

        function __constructT(){
            try{
                $dns = "pgsql:host=$this->server;port=$this->port;dbname=$this->base";
                $this->conexionBD = new PDO($dns,$this->user,$this->pass);
                $this->conexionBD->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //echo "<br>Conectado a sup_nat<br>";

            }catch(PDOException $error){
                echo "<br>Error: $error";
            }
        }
        function getConexionBD(){
            return $this->conexionBD;
        }
    }
   //$objconexion = new Conexion();