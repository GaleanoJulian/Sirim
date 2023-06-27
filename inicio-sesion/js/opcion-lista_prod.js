function mostrarContenidoListaProductos(id) {
    // Obtener todos los elementos con la clase 'contenido'
    var contenidos = document.getElementsByClassName('opt-container');
  
    // Ocultar todos los contenidos
    for (var i = 0; i < contenidos.length; i++) {
      contenidos[i].style.display = 'none';
    }
  
    // Mostrar el contenido correspondiente al ID recibido
    var contenido = document.getElementById(id);
    contenido.style.display = 'block';

    var tableGenListaInitialized =  $.fn.DataTable.isDataTable('#exampleGenLista');
    var tableConListaInitialized =  $.fn.DataTable.isDataTable('#exampleConLista');
    var tablePersProdInitialized =  $.fn.DataTable.isDataTable('#examplePersProd');
    
    if($('#exampleGenLista').css('display') == 'table' && !tableGenListaInitialized){
      $('#exampleGenLista').DataTable(datatTableOptions);
    } 
    if($('#exampleConLista').css('display') == 'table' && !tableConListaInitialized){
      $('#exampleConLista').DataTable(datatTableOptions);
    }
    if($('#examplePersProd').css('display') == 'table' && !tablePersProdInitialized){
      $('#examplePersProd').DataTable(datatTableOptions);
    } 
  }