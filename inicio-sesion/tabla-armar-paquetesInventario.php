<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes</title>
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
        <th>Producto</th>
        <th>Presentación</th>
        <th>Contenido</th>
        <th>Unidad</th>
        <th>Cantidad</th>
        <th>Eliminar</th>
      </tr>
    </thead>
        <tbody>

            <tr>
                <td>Arroz</td>
                <td>bolsa/paquete</td>
                <td>500</td>
                <td>gramos</td>
                <td>2</td>
                <td><button type="submit" name="inscribirUsuario" class="inscribirUsuario_" 
                id="inscUsuario_${item.idUser}" style=" padding: 0.3rem 1rem; background: #3FABDD; color:white; 
                cursor: pointer; border-radius: 1rem; border-top: none; 
                border-left: none;">
                Eliminar
                </button></td>

            </tr>

            <tr>
                <td>Lenteja</td>
                <td>bolsa/paquete</td>
                <td>500</td>
                <td>gramos</td>
                <td>1</td>
                <td><button type="submit" name="inscribirUsuario" class="inscribirUsuario_" 
                id="inscUsuario_${item.idUser}" style=" padding: 0.3rem 1rem; background: #3FABDD; color:white; 
                cursor: pointer; border-radius: 1rem; border-top: none; 
                border-left: none;">
                Eliminar
                </button></td>

            </tr>

            <tr>
                <td>Frijol</td>
                <td>bolsa/paquete</td>
                <td>500</td>
                <td>gramos</td>
                <td>1</td>
                <td><button type="submit" name="inscribirUsuario" class="inscribirUsuario_" 
                id="inscUsuario_${item.idUser}" style=" padding: 0.3rem 1rem; background: #3FABDD; color:white; 
                cursor: pointer; border-radius: 1rem; border-top: none; 
                border-left: none;">
                Eliminar
                </button></td>

            </tr>

          </tbody>
          <tfoot>
              <tr>
                <th>Producto</th>
                <th>Presentación</th>
                <th>Contenido</th>
                <th>Unidad</th>
                <th>Cantidad</th>
                <th>Eliminar</th>
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