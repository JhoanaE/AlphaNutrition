<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../style_interfaces_form.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
<header class="section_container header_container">
            <div class="header_content">
            <span class="bg_blur"></span>
            <span class="bg_blur header_blur"></span>
               

            </div>

        </header>
    <div class="wrapper">
        <table>
            <form action="../html/index.html">
                <h1>Formulario</h1>
                <h3>-Información del Cliente-</h3>    
                <tr>
                    <td>
                    <label for="">¿Cuál es tú edad? </label>
                    <div class="input-box">
                    <input type="number" min="18" max="60">
                    </div>
                    </td>
                    <td>
                    <label for="">¿Cuál es tú género?</label>
                    <select name="genero" class="btn-crud">
                            <option value=""></option>
                            <option value="maculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="">¿Cuánto pesas? (Kg) </label>
                    <div class="input-box">
                    <input type="number" min="50" max="150">
                    </div>
                    </td>
                    <td>
                    <label for="">¿Cuál es tú talla? </label>
                    <div class="input-box">
                    <select name="Talla" class="btn-crud" style="border-color">
                            <option value=""></option>
                            <option value="XXXL">XXXL</option>
                            <option value="XXL">XXL</option>
                            <option value="XL">XL</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XS">XS</option>
                            <option value="XXS">XXS</option>
                            <option value="XXXS">XXXS</option>
                        </select>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="">¿Eres alergico a algo? Si</label>
                    <input type="checkbox"> No<input type="checkbox"> </label>
                    <label for="">¿A que? </label>
                    <div class="input-box">
                    <input type="text">
                    </div>
                    </td>
                    <td>
                    <label for="">¿Cuentas con una dieta?</label>
                    Si<input type="checkbox"> 
                    No<input type="checkbox">
                    </td>
                </tr>
                <tr>
                <td>
                <label for="">¿Cuentas con alguna enfermedad crónica?</label> 
                Si<input type="checkbox"> 
                No<input type="checkbox">
                <label for="">¿Cuál? </label>
                <div class="input-box">
                <input type="text">
                </div>
                </td>
                <td>
                <label for="objetivo">Objetivo</label>
                        <select name="Objetivo" class="btn-crud" id="objetivoSelect" onchange="guardarObjetivoSeleccionado(event)">
                            <option value=""></option>
                            <option value="gananciaMuscular">Ganancia Muscular</option>
                            <option value="definicion">Definición</option>
                            <option value="condicionFisica">Condición Física</option>
                            <option value="cuerpoSaludable">Cuerpo Saludable</option>
                        </select>
                </td>
                </tr>
                <tr>
                    <td>
                    <label for="">¿Realizas actividad deportiva? </label> <br>
                    Si<input type="checkbox"> 
                    No<input type="checkbox">
                    <label for="">¿Cuál? </label><div class="input-box"><input type="text"></div>
                    </td>
                    <td>
                    <label for="">¿Cuántos días a la semana realizas actividad deportiva? </label>
                    <div class="input-box">
                    <input type="number" min="1" max="7">
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="">¿En cuánto tiempo quiere ver resultados? </label>
                    <div class="input-box">
                    <input type="number" placeholder="En meses">
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><br>
                        <div class="input-clear">
                            <input type="reset" value="Limpiar">
                        </div><br>
                        <div class="siguiente2-link">
                            <button class="btn" type="submit">Siguiente</button>
                        </div>
                    </td>
                </tr>
            </form>
        </table>
    </div>

    <script>
        function guardarObjetivoSeleccionado(event) {
            const objetivoSeleccionado = event.target.value;
            localStorage.setItem('objetivoSeleccionado', objetivoSeleccionado);
            highlightProducts(objetivoSeleccionado);
        }
    </script>
</body>
</html>
