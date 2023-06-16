<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Convocatorias</title>
    <link rel="stylesheet" href="./css/styleconvocatoria.css">
</head>
<body>
<main class="main-convocatoria">
  <section class="container">
        <header>Convocatoria</header>
       
        <form action="#" class="form">
          
                <div class="input-box">
                  <label>Inicio de las inscripciones</label>
                  <input type="date" id="fecha-inicio" required />
                </div>

                <div class="input-box">
                    <label>Fin de las inscripciones</label>
                    <input type="date" id="fecha-fin" required />
                </div>

                <div class="input-box">
                    <label>Entrega programada para: </label>
                    <input type="text" id="fecha-entrega" required />
                </div>
    
          <input class="btn" type="submit" value="Publicar convocatoria">
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