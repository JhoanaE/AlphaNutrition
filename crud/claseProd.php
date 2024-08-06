<?php
class SupProd{
    public $id;
    public $nombre;
    public $codigo_producto;
    public $descripcion;
    public $cantidad;
    public $fecha_caducidad;
    public $precio;
    public $foto;


    function __construct($id,$nombre, $codigo_producto,$descripcion,$cantidad,$fecha_caducidad,$precio, $foto){
        
    $this->id=$id;
    $this->nombre=$nombre;
    $this->codigo_producto=$codigo_producto;
    $this->descripcion=$descripcion;
    $this->cantidad=$cantidad;
    $this->fecha_caducidad=$fecha_caducidad;
    $this->precio=$precio;
    $this->foto=$foto;

    //echo "<br>ATRIBUTOS INICIALIZADOS";
   
    
    }
    
}
//$objSupnat = new SupProd(1,'DorianSD','46454','Espinozadfdsc','48','29/06/24','56','');
?>