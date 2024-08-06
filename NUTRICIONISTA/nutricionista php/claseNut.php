<?php
    class Cliente{
        public $idCliente;

        function __construct($idCliente){
            $this->idCliente = $idCliente;
        }
    }
    
    class Dieta{
        public $idDieta;
        public $nomDieta;
        public $descripcion;

        function __construct($idDieta,$nomDieta,$descripcion){
            $this->idDieta = $idDieta;
            $this->nomDieta = $nomDieta;
            $this->descripcion = $descripcion;
        }
    }