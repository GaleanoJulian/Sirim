<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styleinfo_usuario.css">
</head>
<section class="container">
    <header>Perfil de usuario</header>
   
    <form action="../conexion-y-logica/modificar_infoUsuario.php" class="form" method="post">

    <?php
      include("../conexion-y-logica/modificar_infoUsuario.php");
    ?>
      
        <div class="input-box">
        <label>Nombres</label>
        <input type="text" name="name" value="<?php echo $nombre; ?>" onkeypress="return soloLetras(event)" placeholder="Ingrese su nombre" maxlength="25" minlength="3" required />
        </div>

      <div class="input-box">
        <label>Apellidos</label>
        <input type="text" name="last_name" value="<?php echo $apellido; ?>" onkeypress="return soloLetras(event)" placeholder="Ingrese sus apellidos" maxlength="25" minlength="3" required />
      </div>
      
      <div class="input-box">
            <label>Correo electrónico</label>
            <input type="email" name="email" value="<?php echo $correo; ?>" placeholder="Ingrese su correo electrónico" maxlength="50" required />
      </div>

       <div class="input-box">
            <label>Documento de identificación</label><br> 
            <div class="column">             
            <div class="select-box adaptar">
            <select name="doc_type" class="Tipodocumento" required>
                    <option value="Seleccione" name="doc_type" disabled selected hidden><?php echo $docType; ?></option>
                    <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                    <option value="Cédula de extranjería">Cédula de extranjería</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="PPT">PPT</option>
                    <option value="PIP">PIP</option>
                    <option value="PEP">PEP</option>
                </select>
          </div>
          <input type="text" class="adaptar" name="doc_number" value="<?php echo $docNumber; ?>" placeholder="Número de documento" maxlength="15" minlength="6" required />
        </div>

        <div class="column">
           
            <div class="input-box">
              <label>Fecha de nacimiento</label>
              <?php
                $fechaNacimiento = sprintf("%02d/%02d/%04d", $diaNacimiento, $mesNacimiento, $anioNacimiento);
              ?>
              <input type="date" name="birth_date" id="fechaNacimiento" value="<?php echo implode('-', array_reverse(explode('/', $fechaNacimiento))); ?>" oninput="validarFecha()" required />
            </div>
            <div class="input-box">
                <label>Género</label>
                <div class="select-box">
                <select class="Tipodocumento" name="gender" required>
                    <option value="Seleccione" name="gender" disabled selected hidden><?php echo $genero; ?></option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Otro">Otro</option>
                </select>
                </div>
              </div>
    
        </div>
      
      <div>
        <br><label>Dirección</label>
        <input type="text" name="direction" value="<?php echo $direction; ?>" placeholder="Ingrese su dirección de residencia" maxlength="50" minlenght="8" required />
      </div>

      <div class="input-box">
        <label>Número de teléfono</label>
        <input type="tel" name="phone" value="<?php echo $phone; ?>"placeholder="Ingrese su número de celular o teléfono" maxlength="10" minlength="7" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required />
      </div>

      <input class="btn" name="update" type="submit" value="Actualizar datos">
    </form>
  </section>
</body>
</html>