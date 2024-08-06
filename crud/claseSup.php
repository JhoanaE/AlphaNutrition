<?php
class SupAlta{
    public $id;
    public $nombreu;
    public $nombre;
    public $app;
    public $apm;
    public $correo;
    public $tel;
    public $fechan;
    public $sexo;
    public $pass;
    public $alta;

    function __construct($id,$nombreu, $nombre,$app,$apm,$correo,$tel,$fechan,$sexo,$pass){
        
    $this->id=$id;
    $this->nombreu=$nombreu;
    $this->nombre=$nombre;
    $this->app=$app;
    $this->apm=$apm;
    $this->correo=$correo;
    $this->tel=$tel;
    $this->fechan=$fechan;
    $this->sexo=$sexo;
    $this->pass=$pass;

    //echo "<br>ATRIBUTOS INICIALIZADOS";
   
    
    }
    
}
//$objSupnat = new SupAlta(1,'DorianSD','Dorian','Espinoza','Marquez','dorian@gmail.com',554848,'29/06/24','M','dorian1');
?>