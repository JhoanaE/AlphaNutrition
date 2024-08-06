<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="../style_interfacesG.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
    <div class="wrapper">
        <form action="../crud/AltaAdm.php" method="POST">
            <h1>Registrar Administrador</h1>
         <table>
         <table>

<tr>
    <th>
    <div class="input-box">
        <input type="text" placeholder="Nombre Admin" name="nom" required>
    </div>
    </th>
    <th>
    <div class="input-box">
        <input type="text" placeholder="Apellido Paterno" name="app" required>
    </div>
    </th>
</tr>
<tr>
    <th>
    <div class="input-box">
        <input type="text" placeholder="Apellido Materno" name="apm" required>
    </div>
    </th>
    <th>
    <div class="input-box">
        <input type="email" placeholder="Correo Electrónico" name="correo" required>
    </div>
    </th>
</tr>
<tr>
    <th>
    <div class="input-box">
        <input type="number" placeholder="Numero Celular" name="cel" minlength="10" maxlength="10" required>
    </div>
    </th>
    <th>
    <div class="input-box">
        <input type="date" placeholder="Fecha Nacimiento" name="fechaN" required>
    </div>
    </th>
</tr>
<tr>
    <th> 
    <div class="input-box">
        <input type="text" placeholder="Sexo" name="sexo" maxlength="1"required>
    </div>
    </th>
    <th>
    <div class="input-box">
        <input type="password" placeholder="Contraseña" name="pass" required>
    </div>
    </th>
</tr>
<tr>
<td colspan="2">
            <div class="register-link">
                <p>¿Ya tienes una cuenta? <a href="inicio_sesion.php">Iniciar sesión</a></p>
            </div><br>
            <div class="siguiente-link">
                <button class="btn" type="submit">Registrar</button>
            </div>
            </td>
    </tr>
            </table>
        </form>
       
    </div>
</body>

</html>