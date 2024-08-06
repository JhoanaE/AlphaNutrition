<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up form</title>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="styleIndex.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <div class="form-header">
                <h1>Crea tu Usuario Administador</h1>
                <span>Usar tu Email para Registrarte</span>
            </div>
            <form action="../crud/AltaAdm.php" method="post">
                <div class="infield">
                    <input type="text" placeholder="Nombre Usuario" name="nomu" class="alfanum">
                </div>
                <div class="infield">
                    <input type="text" placeholder="Nombre" name="nom" class="alfa" required>
                </div>
                <div class="infield">
                    <input type="text" placeholder="Apellido Paterno" name="app" class="alfa" required>
                </div>
                <div class="infield">
                    <input type="text" placeholder="Apellido Materno" name="apm" class="alfa" required>
                </div>
                <div class="infield">
                    <input type="email" placeholder="Correo Electrónico" name="correo" class="alfanum" required>
                </div>
                <div class="infield">
                    <input type="number" placeholder="Numero Celular" name="cel" class="phoneNumber" required>
                </div>
                <div class="infield">
                    <input type="date" placeholder="Fecha Nacimiento" name="fechaN" required>
                </div>
                <div class="infield">
                    <input type="text" placeholder="Sexo" name="sexo" class="sexo" required>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Contraseña" name="pass" class="alfanum" required>
                </div>
                <button class="btn" type="submit">Registrarte</button>
            </form>
        </div>
        <div class="form-container1 sign-in-container">
            <div class="form-header">
                <h1>Iniciar Sesión como Administador</h1><br>
                <span>Usa tu nombre de Usuario para registrarte</span>
            </div>
            <form action="./registro.php" method="POST">
                <div class="infield">
                    <input type="text" placeholder="Usuario" name="nombreU" class="alfanum" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Contraseña" name="pass" class="alfanum" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button class="btn" type="submit">Iniciar Sesión</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel  overlay-left">
                    <h1>Bienvenido!</h1>
                    <p>Para mantenerse conectado, ingrese su información personal.</p>
                    <button class="btn-crud">Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hola, Amigo!</h1>
                    <p>Ingresa tus datos personales y comienza tu viaje con nosotros </p>
                    <button class="btn-crud">Registrarte</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>
    
    <!-- js code -->
    <script>
        const container = document.getElementById('container');
        const overlayCon = document.getElementById('overlayCon');
        const overlayBtn = document.getElementById('overlayBtn');

        overlayBtn.addEventListener('click', () => {
            container.classList.toggle('right-panel-active');
            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame(() => {
                overlayBtn.classList.add('btnScaled');
            });
        });

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
