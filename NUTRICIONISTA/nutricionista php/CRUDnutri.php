<?php
    include_once('conexionBD.php');
    include_once('claseNut.php');

    class crudNutri extends Conexion{
        function __construct(){
            parent::__constructT();
        }
        function verRegistros(){
            $sql = "SELECT id_cliente, nombreu, app, apm, sexo
            FROM Cliente ";
            $statement = parent::getConexionBD()->prepare($sql);
            $statement->execute();
            return $statement;
        }

        function busqueda($nombreu){
            $sql = "SELECT cliente.id_cliente, nombreu, app, apm, sexo, edad, peso, talla, alergia, enfermedad_c,
            act_deportiva, tiempo_res, objetivo, dieta.id_dieta, nombre_dieta , descripcion
            FROM cliente JOIN solicita ON cliente.id_cliente = solicita.id_cliente 
           JOIN dieta ON solicita.id_dieta = dieta.id_dieta 
            WHERE nombreu = ?";
            $statement = parent::getConexionBD()->prepare($sql);
            $statement->bindparam(1,$nombreu);
            $statement->execute();
            return $statement;
        }
        
        function guardarDieta($nomDieta,$descripcion){
            $sql = "INSERT INTO Dieta (nombre_dieta, descripcion) VALUES (?, ?)";
            $statement = parent::getConexionBD()->prepare($sql);
            $statement->bindparam(1, $nomDieta);
            $statement->bindparam(2, $descripcion);
            $statement->execute();
            return $statement = parent::getConexionBD()->lastInsertId();
        }

        function asignarDieta($nombreCliente, $apellidoCliente, $idDieta) {
            $sql = "SELECT id_cliente FROM Cliente WHERE nombreu = ? AND app = ?";
            $statement = parent::getConexionBD()->prepare($sql);
            $statement->bindParam(1, $nombreCliente);
            $statement->bindParam(2, $apellidoCliente);
            
            if ($statement->execute()) {
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                if ($result) {
                    $idCliente = $result['id_cliente'];
                    
                    $sql = "INSERT INTO Solicita (id_cliente, id_dieta) VALUES (?, ?)";
                    $statement = parent::getConexionBD()->prepare($sql);
                    $statement->bindParam(1, $idCliente);
                    $statement->bindParam(2, $idDieta);
                    
                    if ($statement->execute()) {
                        echo "<div class='container'>
                                <h3>Dieta asignada correctamente.</h3><br>
                                <center><a href='./inicioNutricionista.php'><button class='btn' type='submit'>IR A INICIO</button></a></center>
                              </div>";
                    } else {
                        echo "<div class='container'>
                                <h3>Error al asignar la dieta.</h3><br>
                                <a href='../nutricionista/html/AsignarD.html'>VOLVER A INTENTAR</a>
                              </div>";
                    }
                } else {
                    echo "<div class='container'>
                            <h3>Error: Cliente no encontrado.</h3><br>
                            <a href='../nutricionista/html/AsignarD.html'>VOLVER A INTENTAR</a>
                          </div>";
                }
            } else {
                echo "<div class='container'>
                        <h3>Error al buscar el cliente.</h3><br>
                        <a href='../nutricionista/html/AsignarD.html'>VOLVER A INTENTAR</a>
                      </div>";
            }
        }
        
        function actualizarDieta($objCambio){
            $sql = "UPDATE Dieta SET nombre_dieta = ?, descripcion = ? WHERE id_dieta = ?";
            $statement = parent::getConexionBD()->prepare($sql);
            $statement->bindparam(1,$objCambio->nomDieta);
            $statement->bindparam(2,$objCambio->descripcion);
            $statement->bindparam(3,$objCambio->idDieta);
            if ($statement->execute()) {
                echo "<div class='container'>
                    <h3>Dieta actualizada correctamente.</h3><br>
                    <center><a href='./inicioNutricionista.php'><button class='btn' type='submit'>IR A INICIO</button></a></center>
                    </div>";
            } else {
                echo "<div class='container'>
                        <h3>Error al actualizar la dieta.</h3><br>
                        <a href='../nutricionista html/ActualizarD.html'><button class='btn' type='submit'>VOLVER A INTENTAR</button></a><
                    </div>";
            }
        }
        
        function eliminarDieta($idDieta){
            $sql = "DELETE FROM dieta WHERE id_dieta = $idDieta";
            $statement = parent::getConexionBD()->prepare($sql);
            if ($statement->execute()){
                echo "<div class='container'>
                        <h3>Dieta eliminada correctamente.</h3><br>
                        <a href='./inicioNutricionista.php'><button class='btn' type='submit'>IR A INICIO</button></a>
                    </div>";
            } else {
                echo "<div class='container'>
                        <h3>Error al eliminar la dieta</h3><br>
                        <a href='../nutricionista html/eliminarD.html'><button class='btn' type='submit'>VOLVER A INTENTAR</button></a>
                    </div>";
            }
        }
    }

    echo"<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: rgba(255, 0, 0, 0.788);
        background-size: cover;
        background-position: center;
    }
    .container {
        text-align: center;
    }
    .btn{
        width: 30%;
        height: 40px;
        background: #ffffffd5;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        font-size: 16px;
        color: #444444;
        font-weight: 600;
        margin-bottom: 10px;
        margin-top: 10px;
        margin: auto
    }
    h3 {
        font-size: 36px;
        text-align: center;
    }
</style>";