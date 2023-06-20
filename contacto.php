<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/estyle2.css">
    <script src="./js/espacioblanco.js"></script>
    <script src="./js/regist_validar_campos.js"></script> <!-- Script para poner un spam bajo los campos, indicando que son obligatorios -->
    <title>contactanos</title>
</head>
</body>

    <header class="fixed-nav">
            <a href="index.php" class="logo">SIRIM</a>
        <nav>
            <ul>
                <li><a href="login.php">Iniciar sesión</a></li>
                <li><a href="registro.php">Resgistrate</a></li>
        </nav>
        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                var header = document.querySelector("header");
                header.classList.toggle("abajo",window.scrollY>0);
            })
        </script>
    </header>

    <main>
    <form method="post">
        
        <h1>Contáctanos</h1>

        <div class="column" action="./conexion-y-logica/enviar-contactenos.php">
    
            <div class="input-box adaptar">
                <label for="name">Nombres</label>
                <input type="text" id="name" name="name" onkeypress="return soloLetras(event)" placeholder="Ingrese sus nombres" maxlength="25" minlength="3" required />
                <span class="error-message">Este campo es obligatorio</span>
            </div>
            <div class="input-box adaptar">
                <label for="last_name">Apellidos</label>
                <input type="text" name="last_name" onkeypress="return soloLetras(event)" placeholder="Ingrese sus apellidos" maxlength="25" minlength="3" required />
                <span class="error-message">Este campo es obligatorio</span>
            </div>

        </div>

        <div class="input-box">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico" maxlength="50" required />
            <span class="error-message">Este campo es obligatorio</span>
        </div>

        <div class="input-box">
            <label for="phone">Teléfono</label>
            <input type="tel" id="phone" name="phone" placeholder="Ingrese su número de celular o teléfono" maxlength="10" minlength="7" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required />
            <span class="error-message">Este campo es obligatorio</span>
        </div>

        <div class="input-box">
            <label for="affair">Asunto</label>
            <input type="text" id="affair" name="affair" placeholder="Escriba el asunto" maxlength="20" minlength="10" required/>
            <span class="error-message">Este campo es obligatorio</span>
        </div>

        <div class="input-box">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" placeholder="Tu Mensaje..." maxlength="250" minlength="50" required></textarea>
            <span class="error-message">Este campo es obligatorio</span>
        </div>
               
        <input type="submit" name="enviar" value="Enviar mensaje" class="btn-enviar">
    </form>
    </main>



</body>
</html>