<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/estyle2.css">
    <title>Formulario de Registro</title>
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
    <h1>Formulario de Registro </h1>
    <input type="text" onkeypress="return soloLetras(event)" placeholder="Ingrese sus apellidos" maxlength="25" minlength="3"/>
    <input type="text" onkeypress="return soloLetras(event)" placeholder="Ingrese sus nombres" maxlength="25" minlength="3" />
    <select class="Tipodocumento">
        <option value="Seleccione">Seleccione su tipo de documento</option>
        <option value="Cedula">CEDULA</option>
        <option value="Cedula">PPT</option>
        <option value="Cedula">PIP</option>
        <option value="Cedula">PEP</option>
        <option value="Cedula">IME</option>
    </select>
    <input type="text" placeholder="Ingrese su numero de identidad " maxlength="15"minlength="6"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <select class="Tipodocumento">
        <option value="Seleccione">Seleccione su genero</option>
        <option value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
    </select>
    <input type="date" name="date">
    <input type="text" placeholder="Ingrese su numero telefonico " maxlength="10" minlength="7" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <input type="direccion"placeholder="Ingrese su direccion de residencia" maxlength="50">
    <button a>Registrarse</button>
    <p class="link"><a href="login.php" style="text-decoration: none;">¿Ya tienes cuenta?</a></p>
</form>
</div>
<script src="espacioblanco.js"></script>

<?php
include("./conexion-y-logica/conexion_registro.php");
?>
</body>
</html>