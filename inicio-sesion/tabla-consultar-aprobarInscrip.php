<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripciones</title>
    <!-- data table -->
    <link 
    href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" 
    rel="stylesheet"/>
    <link 
    href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css" 
    rel="stylesheet"/>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<div class="contamy-5" style="width:110%">  
  <div class="row" >
    <table id="example2" class="table table-striped" >
    <caption>Consultar y aprobar inscripciones</caption>
    <thead>
      <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Tipo de documento</th>
        <th>Documento de identidad</th>
        <th>Rol</th>
        <th>Convocatoria</th>
        <th>Estado de inscripcion</th>
        <th>Aprobación</th>
      </tr>
    </thead>
        <tbody>
              <?php
              include("../conexion-y-logica/conexion.php");
    
              $consultaTI= "SELECT
              info_usuario.id,
              info_usuario.nombres AS nombres, 
              info_usuario.apellidos AS apellidos, 
              info_usuario.tipo_doc_id AS tipo_doc_id, 
              info_usuario.doc_identidad AS doc_identidad,
              rol.rol AS rol
                FROM info_usuario
                INNER JOIN usuario ON usuario.id=info_usuario.id_usuario
                INNER JOIN rol ON rol.id=usuario.id_rol ORDER BY info_usuario.id";
              $resultadoTI=mysqli_query($conection, $consultaTI);         
              
              while($mostrar=mysqli_fetch_array($resultadoTI)){
            ?>
            <tr>
              <td><?php echo $mostrar['nombres']?></td>
              <td><?php echo $mostrar['apellidos']?></td>
              <td><?php echo $mostrar['tipo_doc_id']?></td>
              <td><?php echo $mostrar['doc_identidad']?></td>
              <td><?php echo $mostrar['rol']?></td>
              <td>(Fecha convocatoria)</td>
              <td>(estado)</td>
              <td>(botones)</td>

            </tr>
            <?php
              }
            ?>
          </tbody>
          <tfoot>
              <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Tipo de documento</th>
                <th>Documento de identidad</th>
                <th>Rol</th>
                <th>Convocatoria</th>
                <th>Estado de inscripcion</th>
                <th>Aprobación</th>
              </tr>
        </tfoot>
    </table>
    
  </div>
  
</div>
<br><br>
    


    <!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Data table -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

<!-- bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="./js/tabla.js"></script>



</body>
</html>