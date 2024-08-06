<?php
include_once ('conexionSup.php');
include_once('claseSup.php');
include_once('claseProd.php');

class crudSup extends Conexion {
    function __construct() {
        parent::__construct();
    }

    function alta($objSupnat) {
            $sql = 'INSERT INTO cliente(nombreu ,nombre, app, apm, correo, tel, fechan, sexo, pass)
                    VALUES (?, ?,?, ?, ?, ?, now(), ?, ?);';
        
        $statement = parent::getconexionBD()->prepare($sql);

        $statement->bindParam(1, $objSupnat->nombreu);
        $statement->bindParam(2, $objSupnat->nombre);
        $statement->bindParam(3, $objSupnat->app);
        $statement->bindParam(4, $objSupnat->apm);
        $statement->bindParam(5, $objSupnat->correo);
        $statement->bindParam(6, $objSupnat->tel);
        $statement->bindParam(7, $objSupnat->sexo);
        $statement->bindParam(8, $objSupnat->pass);

        if ($statement->execute()) {
            echo '<script>alert("Cuenta creada"); window.history.back();</script>';
        } else {
            echo '<script>alert("Error al crear la cuenta."); window.history.back();</script>';
        }

    }

    function altaAdmi($objSupnat) {
        $sql = 'INSERT INTO admi(nombreu,nombre, app, apm, correo, tel, fechan, sexo, pass)
                VALUES (?,?, ?, ?, ?, ?, now(), ?, ?);';
        
        $statement = parent::getconexionBD()->prepare($sql);


        $statement->bindParam(1, $objSupnat->nombreu);
        $statement->bindParam(2, $objSupnat->nombre);
        $statement->bindParam(3, $objSupnat->app);
        $statement->bindParam(4, $objSupnat->apm);
        $statement->bindParam(5, $objSupnat->correo);
        $statement->bindParam(6, $objSupnat->tel);
        $statement->bindParam(7, $objSupnat->sexo);
        $statement->bindParam(8, $objSupnat->pass);
        if ($statement->execute()) {
            echo '<script>alert("Cuenta creada"); window.history.back();</script>';
        } else {
            echo '<script>alert("Error al crear la cuenta."); window.history.back();</script>';
        }

    }

    function altaNut($objSupnat) {
        $sql = 'INSERT INTO nutricionista(nombreu, nombre, app, apm, correo, tel, fechan, sexo, pass)
                VALUES (?, ?,?, ?, ?, ?, now(), ?, ?);';
        
        $statement = parent::getconexionBD()->prepare($sql);

  
        $statement->bindParam(1, $objSupnat->nombreu);
        $statement->bindParam(2, $objSupnat->nombre);
        $statement->bindParam(3, $objSupnat->app);
        $statement->bindParam(4, $objSupnat->apm);
        $statement->bindParam(5, $objSupnat->correo);
        $statement->bindParam(6, $objSupnat->tel);
        $statement->bindParam(7, $objSupnat->sexo);
        $statement->bindParam(8, $objSupnat->pass);

        if ($statement->execute()) {
            echo '<script>alert("Cuenta creada"); window.history.back();</script>';
        } else {
            echo '<script>alert("Error al crear la cuenta."); window.history.back();</script>';
        }

    }

    function verTodos(){
        $sql = "SELECT * FROM cliente";
        $statement = parent::getconexionBD()->prepare($sql);
        $statement->execute(); 
        return $statement;
    }

    function verTodosAdmi(){
        $sql = "SELECT * FROM admi";
        $statement = parent::getconexionBD()->prepare($sql);
        $statement->execute(); 
        return $statement;
    }

    function verTodosNut(){
        $sql = "SELECT * FROM nutricionista";
        $statement = parent::getconexionBD()->prepare($sql);
        $statement->execute(); 
        return $statement;
    }

    function buscar($nombreu) {
        $sql = "SELECT * FROM cliente WHERE nombreu = ?";
        $statement = parent::getConexionBD()->prepare($sql);
        $statement->bindParam(1, $nombreu);
        $statement->execute();
        return $statement;
    }

    function buscarA($nombreu) {
        $sql = "SELECT * FROM admi WHERE nombreu = ?";
        $statement = parent::getConexionBD()->prepare($sql);
        $statement->bindParam(1, $nombreu);
        $statement->execute();
        return $statement;
    }

    function buscarN($nombreu) {
        $sql = "SELECT * FROM nutricionista WHERE nombreu = ?";
        $statement = parent::getConexionBD()->prepare($sql);
        $statement->bindParam(1, $nombreu);
        $statement->execute();
        return $statement;
    }

    function CrearCliente($id_cliente){
        $sql = "INSERT INTO cliente (id_cliente) VALUES (?)";
        $statement = parent::getConexionBD()->prepare($sql);
        $statement->bindparam(1, $id_cliente);
        $statement->execute();
        return $statement;
    }
    function validarSesion($nombreu,$pass){
        $sql = "SELECT * FROM cliente WHERE nombreu=? AND pass=?";
        $statement = parent::getconexionBD()->prepare($sql);
        $statement ->bindParam(1,$nombreu);
        $statement ->bindParam(2,$pass);
        $statement->execute();
        return $statement;
        }

    function validarSesionAdmi($nombreu,$pass){
        $sql = "SELECT * FROM admi WHERE nombreu=? AND pass=?";
        $statement = parent::getconexionBD()->prepare($sql);
        $statement ->bindParam(1,$nombreu);
        $statement ->bindParam(2,$pass);
        $statement->execute();
        return $statement;
        }    

    function eliminar($nombreu){
        $sql = "DELETE FROM cliente WHERE nombreu=?";
        $statement = parent::getConexionBD()->prepare($sql);
        $statement->bindParam(1, $nombreu);
        if($statement->execute()){
            echo "<div class='wrapper'>";
            echo "<br>ELIMINADO";
            echo "</div>";
        } else{
            echo "<div class='wrapper'>";
            echo "<br>ERROR, USUARIO NO ELIMINADO";
            echo "</div>";
        }
    }

    function eliminarAdmi($nombreu){
        $sql = "DELETE FROM admi WHERE nombreu=?";
        $statement = parent::getConexionBD()->prepare($sql);
        $statement->bindParam(1, $nombreu);
        if($statement->execute()){
            echo "<div class='wrapper'>";
            echo "<br>ELIMINADO";
            echo "</div>";
        } else{
            echo "<div class='wrapper'>";
            echo "<br>ERROR, ADMIN NO ELIMINADO";
            echo "</div>";
        }
    }

    function eliminarNut($nombreu){
        $sql = "DELETE FROM nutricionista WHERE nombreu=?";
        $statement = parent::getConexionBD()->prepare($sql);
        $statement->bindParam(1, $nombreu);
        if($statement->execute()){
            echo "<div class='wrapper'>";
            echo "<br>ELIMINADO";
            echo "</div>";
        } else{
            echo "<div class='wrapper'>";
            echo "<br>ERROR, ADMIN NO ELIMINADO";
            echo "</div>";
        }
    }
    
    function actualizar($objSupnat) {
        $sql = "UPDATE cliente 
                SET nombreu = ?, nombre = ?, app = ?, apm= ?, correo = ?, tel = ?, fechan = ?, sexo = ?, pass = ?
                WHERE nombreu = ?";
        $statement = parent::getConexionBD()->prepare($sql);
        $statement->bindParam(1, $objSupnat->nombreu);
        $statement->bindParam(2, $objSupnat->nombre);
        $statement->bindParam(3, $objSupnat->app);
        $statement->bindParam(4, $objSupnat->apm);
        $statement->bindParam(5, $objSupnat->correo);
        $statement->bindParam(6, $objSupnat->tel, PDO::PARAM_INT);
        $statement->bindParam(7, $objSupnat->fechan);
        $statement->bindParam(8, $objSupnat->sexo);
        $statement->bindParam(9, $objSupnat->pass);
        $statement->bindParam(10, $objSupnat->nombreu);
        
        if ($statement->execute()) {
            echo "<div class='wrapper'>
                    <br>ID: {$objSupnat->id} actualizado...
                  </div>";
        } else {
            echo "<div class='wrapper'>
                    <br>No se pudo actualizar...
                  </div>";
        }
    }

    function actualizarAdmi($objSupnat){

        $sql = "UPDATE admiSET nombreu = ?, nombre = ?, app = ?, apm= ?, correo = ?, tel = ?, fechan = ?, sexo = ?, pass = ?
                WHERE nombreu = ?";
            $statement = parent::getConexionBD()->prepare($sql);
            $statement->bindParam(1, $objSupnat->nombreu);
            $statement->bindParam(2, $objSupnat->nombre);
            $statement->bindParam(3, $objSupnat->app);
            $statement->bindParam(4, $objSupnat->apm);
            $statement->bindParam(5, $objSupnat->correo);
            $statement->bindParam(6, $objSupnat->tel, PDO::PARAM_INT);
            $statement->bindParam(7, $objSupnat->fechan);
            $statement->bindParam(8, $objSupnat->sexo);
            $statement->bindParam(9, $objSupnat->pass);
            $statement->bindParam(10, $objSupnat->nombreu);
            
            if ($statement->execute()) {
                echo "<div class='wrapper'>
                        <br>ID: {$objSupnat->id} actualizado...
                      </div>";
            } else {
                echo "<div class='wrapper'>
                        <br>No se pudo actualizar...
                      </div>";
            }
    
    }

    function actualizarNut($objSupnat){

        $sql = "UPDATE nutricionista
                    SET nombreu = ?, nombre = ?, app = ?, apm= ?, correo = ?, tel = ?, fechan = ?, sexo = ?, pass = ?
                    WHERE nombreu = ?";
            $statement = parent::getConexionBD()->prepare($sql);
            $statement->bindParam(1, $objSupnat->nombreu);
            $statement->bindParam(2, $objSupnat->nombre);
            $statement->bindParam(3, $objSupnat->app);
            $statement->bindParam(4, $objSupnat->apm);
            $statement->bindParam(5, $objSupnat->correo);
            $statement->bindParam(6, $objSupnat->tel, PDO::PARAM_INT);
            $statement->bindParam(7, $objSupnat->fechan);
            $statement->bindParam(8, $objSupnat->sexo);
            $statement->bindParam(9, $objSupnat->pass);
            $statement->bindParam(10, $objSupnat->nombreu);
            
            if ($statement->execute()) {
                echo "<div class='wrapper'>
                        <br>ID: {$objSupnat->id} actualizado...
                      </div>";
            } else {
                echo "<div class='wrapper'>
                        <br>No se pudo actualizar...
                      </div>";
            }
    
    }

    function cambiarPassword($nombreu, $pass) {
        $sql = 'UPDATE cliente SET pass = ? WHERE nombreu = ?';
        
        $statement = parent::getconexionBD()->prepare($sql);
        
        $statement->bindParam(1, $pass);
        $statement->bindParam(2, $nombreu);
        
        if ($statement->execute()) {
            echo "<div class='wrapper'>";
            echo "Contraseña actualizada con éxito.";
            echo "<br><a href='inicio_sesion.php'>Iniciar Sesion</a>";
            echo "</div>";
        } else {
            echo "<div class='wrapper'>";
            echo "Error al actualizar la contraseña.";
            echo "</div>";
        }
    }

    function subirProd($objSupnat){
        $sql="INSERT INTO producto (nom_producto,codigo_producto,descripcion,cantidad,Fecha_Caducidad,costo,imagen) 
        VALUES (?,?,?,?,now(),?,?)";

$statement = parent::getconexionBD()->prepare($sql);

$statement->bindParam(1, $objSupnat->nombre);
$statement->bindParam(2, $objSupnat->codigo_producto);
$statement->bindParam(3, $objSupnat->descripcion);
$statement->bindParam(4, $objSupnat->cantidad);
$statement->bindParam(5, $objSupnat->fecha_caducidad);
$statement->bindParam(6, $objSupnat->precio);
$statement->bindParam(7, $objSupnat->foto_d);
$statement->execute();
if ($statement->execute()) {
    echo 'ya qdo';
} else {
    echo 'no qdo';
}
    }
}


   
$objSupnat = new SupAlta("1", "Dorian70150","Dorian", "Espinoza", "Marquez", "dorian587@gmail.com", "54554854548", "29/06/24", "M", "dorian1");
$crud = new crudSup();
//$crud->alta($objSupnat);
//$crud->altaAdmi($objSupnat);
//$crud->altaNut($objSupnat);
?>