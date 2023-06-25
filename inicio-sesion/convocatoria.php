<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Convocatorias</title>
    <link rel="stylesheet" href="./css/styleconvocatoria.css">
    <script src="./js/fechas-convocatoria.js"></script> <!-- Script para validar que las fechas que se ingresen son válidas -->
</head>
<body>
<main class="main-convocatoria">
  <section class="container">
        <header>Convocatoria</header>
       
        <form action="../conexion-y-logica/conexion_convocatoria-administrador.php" method="post"class="form">
          
                <div class="input-box">
                  <label>Inicio de las inscripciones</label>
                  <input type="date" name="fecha-inicio" id="fecha-inicio" required />
                  <span id="fecha_error"></span>
                </div>

                <div class="input-box">
                    <label>Fin de las inscripciones</label>
                    <input type="date" name="fecha-fin" id="fecha-fin" required />
                    <span id="fecha_error"></span>
                </div>

                <?php
                include("../conexion-y-logica/conexion_convocatoria-administrador.php");
                ?>

                <div class="input-box">
                    <label>Entrega programada para: </label>
                    <input type="text" name="fecha-entrega" value="<?php echo $fechaEntrega; ?>" id="fecha-entrega"/>
                </div>
    
          <input class="btn" type="submit" name="convocar" value="Publicar convocatoria">
        </form>
    </section>

  <br><br>

  <section class="table-container">
    <header>Historial de convocatorias</header><br>
    <table id=table1>
      <thead>
        <tr>
          <th>Convocatoria</th>
          <th>Fecha inicial</th>
          <th>Fecha final</th>
          <th>Fecha de entrega</th>
          <th>Estado</th>
          <th>Responsable</th>
          <th>Rol</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

    </table>
  </section>
</main>
    
</body>
</html>