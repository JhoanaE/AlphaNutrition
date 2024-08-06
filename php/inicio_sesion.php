<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="../style_interfaces.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    
    <div class="wrapper">
        <form action="./registroC.php" method="post">
            <h1>Inicio Sesion</h1>
            <div class="input-box">
                <input type="text" placeholder="Usuario" name="nombreU"required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" name="pass" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Recordarme</label>
                <a href="./nueva_contraseña.php">¿Has olvidado la contraseña?</a>
            </div>

            <div class="iniciar-link">
               <button class="btn" type="submit">Iniciar sesion</button>
            </div>

            <div class="register-link">
                <p>¿No tienes una cuenta? <a href="registra_usuario.php">Crear cuenta nueva</a></p>
            </div>
        </form>
    </div>

</body>
</html>