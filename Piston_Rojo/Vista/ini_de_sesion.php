<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro e Inicio de Sesión</title>
    <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            background-image: url("http://localhost/piston_rojo/imagenes/mooooo.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .form-container {
            background-color: #2c3e50;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .form-header {
            margin-bottom: 15px;
        }

        .form-header img {
            width: 60px;
            height: auto;
            display: block;
            margin: 0 auto 15px;
        }

        .form-header .button-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .form-header button {
            background-color: #2D71B6FF;
            padding: 8px;
            border: none;
            color: #ecf0f1;
            font-size: 12px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .form-header button.active {
            background-color: #B12B2BFF;
        }

        .form-header button:hover {
            background-color: #AD4242FF;
        }

        .form-content {
            display: none;
        }

        .form-content.active {
            display: block;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 15px;
        }

        .form-grid-full {
            grid-column: span 2;
        }

        .form-container h2 {
            color: #ecf0f1;
            margin-bottom: 15px;
        }

        .form-container label {
            display: block;
            text-align: left;
            color: #7C8486FF;
            margin-bottom: 5px;
            font-size: 14px;
        }

        /* Estilo para los campos de texto, contraseña, correo, etc. */
        .form-container input[type="text"],
        .form-container input[type="tel"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 95%;
            padding: 8px;
            margin: 8px 0;
            background-color: #B12B2BFF; /* Fondo rojo */
            border: 2px solid black; /* Borde negro */
            color: white; /* Texto en blanco */
            font-size: 14px;
            border-radius: 5px;
        }

        .form-container input:focus {
            background-color: #AC6F6FFF;
            border-color: #FF0808FF;
            outline: none;
        }

        /* Estilo para el botón de envío */
        .form-container button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background-color: #B12B2BFF;
            border: none;
            color: white;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
        }

        .form-container button:hover {
            background-color: #C74D4DFF;
        }

         /* Estilo específico para el menú desplegable (select) */
         .form-container select {
            background-color: #B12B2BFF; /* Fondo rojo */
            color: white; /* Texto en blanco */
            border: 2px solid black; /* Borde negro */
            border-radius: 5px;
            Width: 95%;
           padding: 8px;
           margin: 8px 0;
           background-color: #B12B2BFF;
           border: 2px solid black;
          color: white;
          font-size: 14px;
          border-radius: 5px;
        }

        .form-container select option {
            background-color: #B12B2BFF; /* Fondo rojo de las opciones */
            color: white; /* Texto en blanco */
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background-color: #B12B2BFF;
            border: none;
            color: white;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
        }
        .form-container button:hover {
            background-color: #C74D4DFF;
        }

        
    </style>

    </style>

    <script>
        function showForm(formId) {
            document.querySelectorAll('.form-content').forEach(form => {
                form.classList.remove('active');
            });
            document.getElementById(formId).classList.add('active');

            document.querySelectorAll('.form-header button').forEach(btn => btn.classList.remove('active'));
            document.getElementById('btn-' + formId).classList.add('active');
        }

        window.onload = function () {
            showForm('login');
        };
    </script>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <a href="../index.php">
                <img src="http://localhost/piston_rojo/imagenes/logo.png" alt="Logo">
            </a>
            <div class="button-container">
                <button id="btn-login" onclick="showForm('login')" class="active">Iniciar Sesión</button>
                <button id="btn-register" onclick="showForm('register')">Registrarse</button>
            </div>
        </div>

        <!-- Formulario de Inicio de Sesión -->
        <div id="login" class="form-content active">
            <h2>Iniciar Sesión</h2>
            <form action="../Controlador/controladorLogin.php" method="POST">
                <label for="loginEmail">Email:</label>
                <input type="email" id="loginEmail" name="userEmail" placeholder="Correo electrónico" required>

                <label for="loginPassword">Contraseña:</label>
                <input type="password" id="loginPassword" name="userPassword" placeholder="Contraseña" required >

                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>

        <!-- Formulario de Registro -->
        <div id="register" class="form-content">
            <h2>Registrarse</h2>
            <form action="../Controlador/controladorUsuario.php" method="POST">
                <input type="hidden" name="accion" value="registrar"> <!-- Campo oculto para registrar -->
                <div class="form-grid">
                    <div>
                        <label for="tipoDocumento">Tipo de Documento:</label>
                        <select id="tipoDocumento" name="tipoDocumento" required>
                            <option value="">Seleccione una opción</option>
                            <option value="CC">Cédula de Ciudadanía (CC)</option>
                            <option value="TI">Tarjeta de Identidad (TI)</option>
                            <option value="CE">Cédula de Extranjería (CE)</option>
                            <option value="PAS">Pasaporte (PAS)</option>
                        </select>
                    </div>
                    <div>
                        <label for="numeroDocumento">Número de Documento:</label>
                        <input type="text" id="numeroDocumento" name="numeroDocumento" placeholder="Número de documento" required pattern="\d+" minlength="6" maxlength="12">
                    </div>
                    <div>
                        <label for="userName">Nombre:</label>
                        <input type="text" id="userName" name="userName" placeholder="Nombre" required minlength="3">
                    </div>
                    <div>
                        <label for="userApellido">Apellido:</label>
                        <input type="text" id="userApellido" name="userApellido" placeholder="Apellido" required minlength="3">
                    </div>
                    <div>
                        <label for="userTelefono">Teléfono:</label>
                        <input type="tel" id="userTelefono" name="userTelefono" placeholder="Teléfono" required pattern="\d{10}" title="Debe ser un número de 10 dígitos">
                    </div>
                    <div>
                        <label for="userDireccion">Dirección:</label>
                        <input type="text" id="userDireccion" name="userDireccion" placeholder="Dirección" required minlength="5">
                    </div>
                    <div class="form-grid-full">
                        <label for="userEmail">Correo Electrónico:</label>
                        <input type="email" id="userEmail" name="userEmail" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="form-grid-full">
                        <label for="userPassword">Contraseña:</label>
                        <input type="password" id="userPassword" name="userPassword" placeholder="Contraseña" required minlength="6">
                    </div>
                </div>
                <button type="submit">Registrarse</button>
            </form>
        </div>
    </div>
</body>

</html>

    
    