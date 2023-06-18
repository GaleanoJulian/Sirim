<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/estyle2.css">    <title>Iniciar Sesion</title>
</head>
<body >
    <div class="container">
    <section class="zona1">
        <header>
                <a href="index.php" class="logo">SIRIM</a>
            <nav>
                <ul>
                    <li><a href="login.php">iniciar sesion</a></li>
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
        <h1>Iniciar Sesión</h1>
        <input type="email" placeholder="Ingrese su Correo" maxlength="45">
        <input type="password" placeholder="Ingrese su contraseña" maxlength="10" minlength="5">
        <button href="./inicio-sesion/sesion.php">Iniciar Sesion</button> <!--Para corregir: Por ahora no funcionará tal cual, solo mientras configuro para validación de información-->
        <p class="link"><a href="registro.php" style="text-decoration: none;">¿no tienes cuenta?</a></p>
        <p class="link"><a href="restablecer.php" style="text-decoration: none;">¿Olvido su contraseña?</a></p>
        </form>
</div>
<script src="./js/espacioblanco.js"></script>

</body>
</html>