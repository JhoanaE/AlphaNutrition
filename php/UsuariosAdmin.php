<?php
include_once('../crud/crudSup.php');

$crud = new crudSup();
$crud->verTodos();
$statement = $crud->verTodos();
$res = $statement->rowCount();
//echo "Registros: " . $res;
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_interfaces_usuarios.css">
    <title>Alpha Nutririon</title>
</head>

<body>
   
        <nav>
            <div class="nav_logo">
                <a href="#"><img src="../img/Logo2.0.png" alt="Logo"></a>
            </div>

            <ul class="nav_links">
                <li class="link"><a href="./productosAdmin.php">Productos</a></li>
                <li class="link"><a href="./OrdenAdmin.php">Órdenes</a></li>
                <li class="link"><a href="./UsuariosAdmin.php">Usuarios</a></li>
            </ul>
            <a href="./registrar_admin.php"><button class="btn">Únete Ahora</button></a>
        </nav>


        <header class="section_container header_container">
            <div class="header_content">
            <span class="bg_blur"></span>
            <span class="bg_blur header_blur"></span>
                <h1>Administrar Usuarios</h1>
                <h4>"Agregar, Editar y Eliminar Clientes"</h4>

            </div>

        </header>

        <div style="padding-left:90px;">
            <h1 >Seleccione una opción</h1>
            <select class="btn-crud" id="options" onchange="showContent()">
                <option value="none">Seleccione...</option>
                <option value="cliente">Gestionar Cliente</option>
                <option value="administrador">Gestionar Administrador</option>
                <option value="nutricionista">Gestionar Nutricionista</option>
            </select>
        </div><br>

        <div id="cliente" class="content">
            <div id="Clientes">
                <h2>REGISTROS</h2>
                <center>
                <form action="../php/usuarioIndividual.php" method="post">
                    <input type="text" placeholder="Buscar" name="namu" class="input-box alfanum">
                    <button class="btn" type="submit">Buscar</button>
                    </form>
                </center>
                <br>
                <div class="">
                <center>
                <a href="../html/AgregarC.html"> <button class="btn"> Agregar</button></a>
               <a href=""><button class="btn">Actualizar</button></a>
               <a href=""><button class="btn">Borrar</button></a>
                </center>
             </div>
                
                <header class="section_container header_container">
                <table class="mostrar-Usuarios">
                 
                        <tr>
                            <th class="sticky">Id_Usuario </th>
                            <th class="sticky">Nombre usuario </th>
                            <th class="sticky">Nombre </th>
                            <th class="sticky">ApellidoP Usuario</th>
                            <th class="sticky">ApellidoM Usuario</th>
                            <th class="sticky">Correo</th>
                            <th class="sticky">Telefono</th>
                            <th class="sticky">Fecha Nacimiento</th>
                            <th class="sticky">Sexo</th>
                            <th class="sticky">Password</th>
                        </tr>
                        
                        <?php
        if ($res > 0) {
            $resulset = $statement->fetchAll(PDO::FETCH_OBJ);
            foreach($resulset as $usuario){
                echo "
                
                <tr>
            <th>".$usuario->id_cliente."</th>
            <th>".$usuario->nombreu."</th>
            <th>".$usuario->nombre."</th>
            <th>".$usuario->app."</th>
            <th>".$usuario->apm."</th>
            <th>".$usuario->correo."</th>
            <th>".$usuario->tel."</th>
            <th>".$usuario->fechan."</th>
            <th>".$usuario->sexo."</th>
            <th>".$usuario->pass."</th>
            <th><a href='../html/actualizarCliente.html' class='eliminarlink'>Actualizar</a></th>
            <th><a href='eliminarUsuario.php?num=$usuario->id_cliente' class='eliminarlink'>Dar de baja</a></th>
        </tr>
                
                ";
            }
        } else {
            echo "
                <tr>
                <th colspan='9'>
                    <marquee behavior='' direction=''>NO HAY REGISTROS</marquee>
                </th>
            </tr> 
            
                ";
        }
        ?>

                </table>
            </div>

            
            </div>
        </div>

        <div id="administrador" class="content">
            <div id="Administrador">
                <h2>Registro</h2>
                <center>
                <form action="../php/usuarioIndividualA.php" method="post">
                    <input type="text" placeholder="Buscar" name="namu" class="input-box alfanum">
                    <button class="btn" type="submit">Buscar</button>
                    </form>
                </center>
                <div class="">
                <center>
                <a href="../html/AgregarA.html"> <button class="btn"> Agregar</button></a>
               <a href=""><button class="btn">Actualizar</button></a>
               <a href=""><button class="btn">Borrar</button></a>
                </center>
             </div>
             <header class="section_container header_container">
             <table class="mostrar-Usuarios">
                        <tr>
                            <th class="sticky">Id_Admin </th>
                            <th class="sticky">Nombre usuario </th>
                            <th class="sticky">Nombre </th>
                            <th class="sticky">ApellidoP Usuario</th>
                            <th class="sticky">ApellidoM Usuario</th>
                            <th class="sticky">Correo</th>
                            <th class="sticky">Telefono</th>
                            <th class="sticky">Fecha Nacimiento</th>
                            <th class="sticky">Sexo</th>
                            <th class="sticky">Password</th>
                        </tr>
                  
                    <?php
                    $crud->verTodosAdmi();
                    $statement = $crud->verTodosAdmi();
                    $res1 = $statement->rowCount();
        if ($res1 > 0) {
            $resulset = $statement->fetchAll(PDO::FETCH_OBJ);
            foreach($resulset as $adm){
                echo "
                
                <tr>
            <th>".$adm->id_admin."</th>
            <th>".$adm->nombreu."</th>
            <th>".$adm->nombre."</th>
            <th>".$adm->app."</th>
            <th>".$adm->apm."</th>
            <th>".$adm->correo."</th>
            <th>".$adm->tel."</th>
            <th>".$adm->fechan."</th>
            <th>".$adm->sexo."</th>
            <th>".$adm->pass."</th>
            <th><a href='../html/actualizarCliente.html' class='eliminarlink'>Actualizar</a></th>
            <th><a href='eliminarAdm.php?num=$adm->id_admin' class='eliminarlink'>Dar de baja</a></th>
        </tr>
                
                ";
            }
        } else {
            echo "
                <tr>
                <th colspan='9'>
                    <marquee behavior='' direction=''>NO HAY REGISTROS</marquee>
                </th>
            </tr> 
                ";
        }
        ?>
                </table>
            </div>
           
            </div>
        </div>

        
        <div id="nutricionista" class="content">
            <div id="Nutricionista">
                               <h2>Registro</h2>
                               <center>
                <form action="../php/usuarioIndividualN.php" method="post">
                    <input type="text" placeholder="Buscar" name="namu" class="input-box alfanum">
                    <button class="btn" type="submit">Buscar</button>
                    </form>
                </center>
                <div class="">
                <center>
                <a href="../html/AgregarN.html"> <button class="btn"> Agregar</button></a>
               <a href=""><button class="btn">Actualizar</button></a>
               <a href=""><button class="btn">Borrar</button></a>
                </center>
             </div>
             <header class="section_container header_container">
             <table class="mostrar-Usuarios">
                        <tr>
                            <th class="sticky">Id_Nut </th>
                            <th class="sticky">Nombre usuario </th>
                            <th class="sticky">Nombre </th>
                            <th class="sticky">ApellidoP Usuario</th>
                            <th class="sticky">ApellidoM Usuario</th>
                            <th class="sticky">Correo</th>
                            <th class="sticky">Telefono</th>
                            <th class="sticky">Fecha Nacimiento</th>
                            <th class="sticky">Sexo</th>
                            <th class="sticky">Password</th>
                        </tr>
                    </thead>
                    <?php
                    $crud->verTodosNut();
                    $statement = $crud->verTodosNut();
                    $res1 = $statement->rowCount();
        if ($res1 > 0) {
            $resulset = $statement->fetchAll(PDO::FETCH_OBJ);
            foreach($resulset as $nut){
                echo "
                
                <tr>
            <th>".$nut->id_nutricionista."</th>
            <th>".$nut->nombreu."</th>
            <th>".$nut->app."</th>
            <th>".$nut->apm."</th>
            <th>".$nut->correo."</th>
            <th>".$nut->tel."</th>
            <th>".$nut->fechan."</th>
            <th>".$nut->sexo."</th>
            <th>".$nut->pass."</th>
            <th><a href='../html/actualizarCliente.html' class='eliminarlink'>Actualizar</a></th>
            <th><a href='eliminarNut.php?num=$nut->id_nutricionista' class='eliminarlink'>Dar de baja</a></th>
        </tr>
                
                ";
            }
        } else {
            echo "
                <tr>
                <th colspan='9'>
                    <marquee behavior='' direction=''>NO HAY REGISTROS</marquee>
                </th>
            </tr> 
                ";
        }
        ?>
                </table>
            </div>

           
            </div>
        </div>
    

        
        <?php
        echo"<style>
        a {
    cursor: pointer;
    text-decoration: none;
    color: #d1d5db;
}

a:hover{
    color: #000000;
}
    </style>";
        ?>


        <script>
            function showContent() {
                // Oculta todos los contenidos
                var contents = document.querySelectorAll('.content');
                contents.forEach(function (content) {
                    content.classList.remove('active');
                });

                // Muestra el contenido seleccionado
                var selectedOption = document.getElementById('options').value;
                if (selectedOption !== 'none') {
                    document.getElementById(selectedOption).classList.add('active');
                }
            }

            //Validacion para evitar espacios pero si datos alfanumericos

        document.querySelectorAll('.alfanum').forEach(input => {
        input.addEventListener('input', function(event) {
        event.target.value = event.target.value.replace(/\s+/g, '');
    });
});

        //Validacion para evitar espacios y solo datos alfabeticos

        document.querySelectorAll('.alfa').forEach(input => {
        input.addEventListener('input', function(event) {
        event.target.value = event.target.value.replace(/[^a-zA-Z]/g, '');
        event.target.value = event.target.value.replace(/\s+/g, '');
    });
});

        //Validacion que solo permite 10 digitos para un número de télefono
        
        const phoneInputs = document.querySelectorAll('.phoneNumber');
        phoneInputs.forEach(input => {
            input.addEventListener('input', function(event) {
                let value = event.target.value;
                if (value.length > 10) {
                    event.target.value = value.slice(0, 10);
                }
                event.target.value = event.target.value.replace(/[^0-9]/g, '');
            });
        });

        //Validacion para sexo (Solo permite ingresar la letra M o F)

        document.querySelectorAll('.sexo').forEach(input => {
    input.addEventListener('input', function(event) {
        // Eliminar caracteres no permitidos
        let value = event.target.value.replace(/[^mMfF]/g, '');

        // Permitir solo un carácter
        if (value.length > 1) {
            value = value[0]; // Mantener solo el primer carácter
        }

        // Establecer el valor del campo
        event.target.value = value;
    });
});

        </script>
</body>

</html>