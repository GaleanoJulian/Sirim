async function mostrarContenidoInventario(id) {
  // Obtener todos los elementos con la clase 'contenido'
  var contenidos = document.getElementsByClassName('productos-paquetes');

  // Ocultar todos los contenidos
  for (var i = 0; i < contenidos.length; i++) {
      contenidos[i].style.display = 'none';
  }

  // Ocultar la clase 'tarje-header'
  var tarjHeader = document.getElementsByClassName('tarjetas');
  for (var i = 0; i < tarjHeader.length; i++) {
      tarjHeader[i].style.display = 'none';
  }

  // Mostrar el contenido correspondiente al ID recibido
  var contenido = document.getElementById(id);
  contenido.style.display = 'block';
  await new Promise(resolve => setTimeout(resolve, 400));
  initTables();
}

function mostrarTarjeHeader() {
  // Ocultar todos los contenidos con la clase 'productos-paquetes'
  var contenidos = document.getElementsByClassName('productos-paquetes');
  for (var i = 0; i < contenidos.length; i++) {
    contenidos[i].style.display = 'none';
  }
  
  // Mostrar la clase 'tarj-header'
  var tarjHeader = document.getElementsByClassName('tarjetas');
  for (var i = 0; i < tarjHeader.length; i++) {
    tarjHeader[i].style.display = 'block';
  }

 
}

function initTables(){
  var table1Initialized =  $.fn.DataTable.isDataTable('#example1');
  var table2Initialized =  $.fn.DataTable.isDataTable('#example2');
  var table3Initialized =  $.fn.DataTable.isDataTable('#example3');
  
  if($('#example1').css('display') == 'table' && !table1Initialized){
    $('#example1').DataTable(datatTableOptions);
  } 
  if($('#example2').css('display') == 'table' && !table2Initialized){
    $('#example2').DataTable(datatTableOptions);
  }
  if($('#example3').css('display') == 'table' && !table3Initialized){
    $('#example3').DataTable(datatTableOptions);
  } 
}