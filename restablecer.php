<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Restablecer contraseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/estyle2.css">
    <script src="./js/regist_validar_campos.js"></script> <!-- Script para poner un spam bajo los campos, indicando que son obligatorios -->
    <script src="./js/espacioblanco.js"></script>
</head>
</body>

    <header class="fixed-nav">
            <a href="index.php" class="logo">SIRIM</a>
        <nav>
            <ul>
                <li><a href="login.php">Iniciar sesión</a></li>
                <li><a href="registro.php">Resgistrate</a></li>
        </nav>
    </header>

    <main class="restablecer">
    <form class="form-restablecer" action="./conexion-y-logica/recovery.php" method="post">
    <h2>¿Olvidaste tu contraseña?</h2><br>
    <p>Ingresa tu correo electrónico para recibir un enlace de restablecimiento de contraseña.</p> <br>
    <div class="input-box">
            <label>Correo electrónico</label>
            <input type="email" name="email" placeholder="Ingrese su correo electrónico" maxlength="50" required />
            <span class="error-message">Este campo es obligatorio</span>
        </div>
        <input class="btn" type="submit" name="submit" value="Enviar correo de restablecimiento">

    </form>
    </main>

</body>
</html>