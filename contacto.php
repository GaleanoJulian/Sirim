<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/estyle2.css">
    <title>contactanos</title>
</head>
</body>

<div class="container">
<section class="zona1">
    <header>
            <a href="index.php" class="logo">SIRIM</a>
        <nav>
            <ul>
                <li><a href="login.php">Iniciar sesión</a></li>
                <li><a href="registro.php">Resgistrate</a></li>
        </nav>
    </header>
    <section>
        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                var header = document.querySelector("header");
                header.classList.toggle("abajo",window.scrollY>0);
            })
        </script>

    <form action="">
        <h1>contactanos</h1>
        <input type="email" placeholder="Ingrese su Correo"  maxlength="45">
        <input type="text" onkeypress="return soloLetras(event)" placeholder="Ingrese sus nombres" maxlength="25" minlength="3" />
        <input type="text" placeholder="Ingrese su número telefónico " maxlength="10" minlength="7" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
        <input type="asunto" placeholder="Escriba el asunto" maxlength="20" minlength="10">
        <textarea name="mensaje" placeholder="Tu Mensaje..." maxlength="250" minlength="50"></textarea>
        <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
    </form>
</div>
<script src="./js/espacioblanco.js"></script>
</body>
</html>