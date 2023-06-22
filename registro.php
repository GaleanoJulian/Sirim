<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/estyle2.css">
    <script src="./js/regist_password.js"></script> <!-- Script para comprobar que las contraseñas son iguales en ambos campos al hacer el registro-->
    <script src="./js/regist_birth-date_valida.js"></script> <!-- Script para validar la edad de registro, no menores de edad, no mayores de 110 años -->
    <script src="./js/regist_validar_campos.js"></script> <!-- Script para poner un spam bajo los campos, indicando que son obligatorios -->
    <script src="./js/espacioblanco.js"></script> <!-- Script para evitar poner caracteres de números y especiales en nombres y apellidos -->
    <title>Formulario de Registro</title>
</head>
<body>
    <header class="fixed-nav">
            <a href="index.php" class="logo">SIRIM</a>
        <nav >
            <ul>
                <li><a href="login.php">Iniciar sesión</a></li>
        </nav>
    </header>

    <main>
    <form method="post">
        <h1>Formulario de Registro </h1>

        <div class="column">
    
            <div class="input-box adaptar">
                <label>Nombres</label>
                <input type="text" name="name" onkeypress="return soloLetras(event)" placeholder="Ingrese sus nombres" maxlength="25" minlength="3" required />
                <span class="error-message">Este campo es obligatorio</span>
            </div>
            <div class="input-box adaptar">
                <label>Apellidos</label>
                <input type="text" name="last_name" onkeypress="return soloLetras(event)" placeholder="Ingrese sus apellidos" maxlength="25" minlength="3" required />
                <span class="error-message">Este campo es obligatorio</span>
            </div>
    
        </div>

        <div class="input-box">
            <label>Correo electrónico</label>
            <input type="email" name="email" placeholder="Ingrese su correo electrónico" maxlength="50" required />
            <span class="error-message">Este campo es obligatorio</span>
        </div>

        <div class="column">
        <div class="input-box adaptar">
            <label>Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" maxlength="50" minlength="8"required onkeyup="validarContraseña()" />
            <span class="error-message">Este campo es obligatorio</span>
        </div>

        <div class="input-box adaptar">
            <label>Confirmación</label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirme su contraseña" maxlength="50" minlength="8" required onkeyup="validarContraseña()" />
            <span id="password_error">Las contraseñas no coinciden</span>
            <span class="error-message">Este campo es obligatorio</span>
        </div>

        </div>

        <div class="input-box">
            <label>Documento de identificación</label><br> 
            <div class="column">             
            <div class="select-box adaptar">
            <select name="doc_type" class="Tipodocumento" required>
                    <option value="Seleccione" disabled selected hidden>Tipo de documento</option>
                    <option value="Cedula_ciudadania">Cédula de ciudadanía</option>
                    <option value="Cedula_extranjeria">Cédula de extranjería</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="Permiso_proteccion_temporal">PPT</option>
                    <option value="Permiso_ingreso_permanencia">PIP</option>
                    <option value="Permiso_especial_permanencia">PEP</option>
                </select>
                <span class="error-message">Este campo es obligatorio</span>
            </div>
            <div class="input-box adaptar">
                <input type="text" class="adaptar" name="doc_number" placeholder="Número de documento" maxlength="15" minlength="6" required />
                <span class="error-message">Este campo es obligatorio</span>
            </div>
            </div>       
        </div>

        <div class="column">

            <div class="input-box adaptar">
                <label>Género</label>
                <div class="select-box">
                <select class="Tipodocumento" name="gender" required>
                    <option value="Seleccione" disabled selected hidden>Seleccione su género</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Otro">Otro</option>
                </select>
                <span class="error-message">Este campo es obligatorio</span>
                </div>
                
            </div>

            <div class="input-box adaptar">
            <label>Fecha de nacimiento</label>
            <input type="date" name="birth_date" id="fechaNacimiento" placeholder="Ingrese su fecha de nacimiento" oninput="validarFecha()" required />
            <span id="fecha_error"></span>
            <span class="error-message">Este campo es obligatorio</span>
            </div>
        
        </div>

        <div class="input-box">
            <label>Teléfono</label>
            <input type="tel" name="phone" placeholder="Ingrese su número de celular o teléfono" maxlength="10" minlength="7" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required />
            <span class="error-message">Este campo es obligatorio</span>
        </div>

        <div class="input-box">
            <label>Dirección</label>
            <input type="text" name="direction" placeholder="Ingrese su dirección de residencia" maxlength="50" minlenght="8" required />
            <span class="error-message">Este campo es obligatorio</span>
        </div>  
   
        <button type="submit" name="register" onclick="validarFormulario()">Registrarse</button>

</form>
</main>

    <?php
        include("./conexion-y-logica/conexion_registro.php");
    ?>

</body>
</html>