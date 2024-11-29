<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Citas</title>
    <link rel="stylesheet" href="css/estilosjv.css">
</head>

<body>
    <!-- Navegación -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="Index.php"><img src="imagenes/Logo.png" alt="Logo" class="logo"></a>
            </div>
            <ul class="menu-navegacion">
                <li><a href="Index.php">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="agendar.php" class="btn-agendar">Agendar una cita</a></li>
            </ul>
        </div>
    </nav>

    <!-- Encabezado -->
    <header class="header">
        <h1>Piston Rojo</h1>
        <p>Si necesitas nuestro servicio con <strong>URGENCIA</strong> escríbenos a WhatsApp</p>
        <a href="tel:3103487220" class="btn-contacto">Contáctanos</a>
        <br>
        <p>Si necesitas agendar una cita puedes hacerlo aquí</p>

        <!-- Formulario -->
        <main id="1" class="container my-5">
            <form id="myForm" method="POST" action="procesar_formulario.php">
                <!-- Tipo de documento -->
                <div class="mb-3">
                    <label for="tipo-documento" class="form-label">Tipo de Documento</label>
                    <select id="tipo-documento" name="tipo_documento" class="form-select" required>
                        <option value="" selected disabled>Seleccione una opción</option>
                        <option value="cc">Cédula de Ciudadanía</option>
                        <option value="ti">Tarjeta de Identidad</option>
                        <option value="ce">Cédula de Extranjería</option>
                    </select>
                </div>

                <!-- Número de documento -->
                <div class="mb-3">
                    <label for="num-documento" class="form-label">Número de Documento</label>
                    <input type="text" id="num-documento" name="num_documento" class="form-control" placeholder="Ingresa tu número de documento" required>
                </div>

                <!-- Tipo de servicio -->
                <div class="mb-3">
                    <label for="tipo-servicio" class="form-label">Tipo de Servicio</label>
                    <select id="tipo-servicio" name="tipo_servicio" class="form-select" required>
                        <option value="" selected disabled>Seleccione una opción</option>
                        <option value="mantenimiento">Mantenimiento</option>
                        <option value="reparacion">Reparación</option>
                        <option value="diagnostico">Diagnóstico</option>
                    </select>
                </div>

                <!-- Nombre y Apellido -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ingresa tu apellido" required>
                    </div>
                </div>

                <!-- Botón de envío -->
                <div class="text-center">
                    <button type="submit" class="btn btn-danger btn-lg">Siguiente</button>
                </div>
            </form>
        </main>
    </header>

   <!-- Nueva sección con texto e imagen -->
<div class="text-and-image-section">
    <!-- Contenedor de texto e imagen a la derecha -->
    <div class="text-and-image-container">
        <!-- Sección de texto -->
        <div class="text-box">
            <h1 class="text-large">Servicio de Piston Rojo Profesional</h1>
            <br>
            <p class="text-medium">
            En Piston Rojo nos apasiona la excelencia en el rendimiento de las motos. Nuestro servicio de puesta a punto incluye:<br>
            <br>
                - Ajustes precisos en el motor<br>
                - Revisión exhaustiva de la suspensión<br>
                - Optimización de la transmisión<br>
<br>
                Además, llevamos a cabo un análisis completo de la seguridad para garantizar que tu moto esté lista para cualquier aventura en las carreteras.
                Respaldamos nuestro trabajo con una garantía de satisfacción. Si no estás completamente satisfecho con nuestro servicio, trabajaremos contigo hasta que tu moto esté en perfecto estado.


            </p>
           <br>
           <br>
            <button class="action-button">▶ AGENDA TU CITA</button>
        </div>
        <!-- Imagen a la derecha -->
        <img src="imagenes/22.png" alt="Servicio de Piston Rojo" class="right-image">
    </div>

    <!-- Descripción Central -->
    <div class="description-box">
        <p class="text-medium">
          Descubre la verdadera potencia y rendimiento de tu moto con Piston Rojo. ¡Reserva tu cita y experimenta un servicio diseñado para llevar tus trayectos al siguiente nivel!
        </p>
    </div>

    <!-- Contenedor de texto e imagen a la derecha -->
    <div class="text-and-image-container">
        <!-- Sección de texto -->
        <div class="text-box">
            <h2 class="text-large">Beneficios Piston Rojo</h2>
            <br>
            <br>
            <p class="text-medium">
               - Aumenta la potencia y eficiencia de tu moto<br>
               - Mejora la estabilidad y maniobrabilidad en carretera<br>
               - Prolonga la vida útil de tu moto con nuestro servicio preventivo<br>
               - Experimenta un viaje suave y seguro en cada trayecto
            </p>
            <br>
            <br>
            
            <button class="action-button">▶ AGENDA TU CITA</button>
        </div>
        <!-- Imagen a la derecha -->
        <img src="imagenes/11.png" alt="Beneficios Piston Rojo" class="right-image">
    </div>
</div>


    <script>
        // Captura el evento de envío del formulario
        document.getElementById('myForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Evita el envío del formulario
            window.location.href = 'Usuario2.php'; // Redirige a Usuario2.php
        });
    </script>
</body>

</html>
