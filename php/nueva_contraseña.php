<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Contraseña</title>
    <link rel="stylesheet" href="../style_interfaces.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>

    <div class="wrapper">

        <form action="actualizarPass.php" method="POST">

            <h1>Nueva Contraseña</h1>

            <div class="input-box">
            <input type="text" name="nombreu" placeholder="Usuario" class="alfanum" required>
            <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
            <input type="password" name="newPass"placeholder="Nueva Contraseña" class="alfanum" required>
            <i class='bx bxs-lock-alt'></i>
            </div>

          
            <button class="btn" type="submit">Guardar Cambios</button>
            <div class="register-link">
                <p><a href="./inicio_sesion.php">Regresar</a></p>
            </div>
            </div>
            
        </form>

    </div>

    <script>
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