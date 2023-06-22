<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/estyle2.css">    <title>Iniciar Sesion</title>
    <script src="./js/regist_validar_campos.js"></script> <!-- Script para poner un spam bajo los campos, indicando que son obligatorios -->
    <script src="./js/espacioblanco.js"></script>
</head>
<body >

    <header class="fixed-nav">
            <a href="index.php" class="logo">SIRIM</a>
        <nav>
            <ul>
                <li><a href="registro.php">Resgistrate</a></li>
        </nav>
    </header>

    <main>
    <form action="./conexion-y-logica/conexion_login.php" method="post" class="inicio-form">
            
        <h1>Iniciar Sesión</h1>

            <div class="input-box">
                <label>Correo electrónico</label>
                <input type="email" name="email" placeholder="Ingrese su Correo" maxlength="45" required/>
                <span class="error-message">Este campo es obligatorio</span>
            </div>

            <div class="input-box">
                <label>Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" minlength="8" maxlength="50" required onkeyup="validarContraseña()" />
                <span class="error-message">Este campo es obligatorio</span>
            </div>
       
        
        <button type="submit" name="login" onclick="validarFormulario()">Iniciar sesión</button>

        <p class="link"><a href="registro.php" style="text-decoration: none;">¿No tienes cuenta?</a></p>
        
        <p class="link"><a href="restablecer.php" style="text-decoration: none;">¿Olvidaste tu contraseña?</a></p>
        
    </form>
    </main>

    <?php
        include("./conexion-y-logica/conexion_login.php");
    ?>

</body>
</html>