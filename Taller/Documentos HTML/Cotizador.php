<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andy Hotel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../Documentos CSS/stylecotizador.css">
    
</head>

<body>
    <header>
        <iframe src="../Documentos HTML/header.html" scrolling="no" frameborder="0"> </iframe>

    </header>
    <main>
        <div class="container">
            <h1>Cotizador de Departamentos</h1>
            <form id="cotizadorForm" method="POST" action="cotizador.php">
                <label for="nombre">Nombre:</label> <br>
                <input type="text" id="nombre" name="nombre" required><br>
                
                <label for="correo">Correo:</label><br>
                <input type="email" id="correo" name="correo" required><br>
                
                <label for="tipoDepartamento">Tipo de Departamento:</label>
                <select id="tipoDepartamento" name="tipoDepartamento" required><br>
                    <option value="">Seleccione</option><br>
                    <option value="suite">Suite</option>
                    <option value="dosHabitaciones">Dos Habitaciones</option>
                    <option value="tresHabitaciones">Tres Habitaciones</option>
                </select>
                <br>
                <label>Estilo de Cocina:</label>
                <div>
                    <input type="radio" id="tradicional" name="estiloCocina" value="tradicional" required>
                    <label for="tradicional">Tradicional</label>
                </div>
                <div>
                    <input type="radio" id="isla" name="estiloCocina" value="isla" required>
                    <label for="isla">Isla</label>
                </div>
                
                <label>Servicios Adicionales:</label>
                <div>
                    <input type="checkbox" id="Gimnasio" name="servicios[]" value="Gimnasio"> Gimnasio
                    <br>
                    <input type="checkbox" id="areacoworkig" name="servicios[]" value="areacoworkig"> Area de coworking
                    <br>
                    <input type="checkbox" id="SPA" name="servicios[]" value="SPA"> SPA
                </div>
                
                <button type="submit">Enviar</button>
                <button type="submit">Reset</button>
            </form>
            <div id="resultado">
            <?php

            // Verificar si se ha enviado el formulario
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtener los datos del formulario
                $nombre = $_POST["nombre"];
                $correo = $_POST["correo"];
                $tipoDepartamento = $_POST["tipoDepartamento"];
                $estiloCocina = $_POST["estiloCocina"];
                $servicios = $_POST["servicios"];

                // Calcular el precio total
                $precioDepartamento = 0;
                if ($tipoDepartamento === "suite") {
                    $precioDepartamento = 25000;
                } else if ($tipoDepartamento === "dosHabitaciones") {
                    $precioDepartamento = 50000;
                } else if ($tipoDepartamento === "tresHabitaciones") {
                    $precioDepartamento = 90000;
                }

                $precioComida = 0;
                if($estiloCocina=== "isla"){
                    $precioComida = 1200;
                }

                $precioAdicionalPorServicio = 50;
                $precioServicio=0;
                foreach ( $servicios as $servicio) {
                    $precioServicio += $precioAdicionalPorServicio;
                    //echo "Servicio seleccionado: $servicio $$precioAdicionalPorServicio <br> ";
                    
                }
                
                $precioTotal = $precioServicio + $precioComida + $precioDepartamento;
                // Mostrar el resultado en un div con id="resultado"
                
                echo "La cotización para $nombre es de: $$precioTotal<br>
                Descripcion: <br>
                Departamento seleccionado: $tipoDepartamento <br>
                Valor del departamento: $$precioDepartamento <br>
                Estilo de cocina: $estiloCocina <br>
                Valor del estilo de cocina: $$precioComida <br>
                Servicios adicionales:<br>";
                foreach ( $servicios as $servicio) {
                    echo "Servicio seleccionado: $servicio $$precioAdicionalPorServicio <br> ";
                }
                echo "Total servicio adicional: $$precioServicio <br>";
            }
            ?>
            </div>
        </div>
    </main>
</body>
        
    <footer>
        <iframe src="../Documentos HTML/footer.html" frameborder="0" scrolling="no" class="footer"></iframe>
    </footer>

</html>
