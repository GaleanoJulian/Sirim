function mostrarContenidoinscripcion(id) {
    // Obtener todos los elementos con la clase 'contenido'
    var contenidos = document.getElementsByClassName('inscribir-conv');
  
    // Ocultar todos los contenidos
    for (var i = 0; i < contenidos.length; i++) {
      contenidos[i].style.display = 'none';
    }
  
    // Mostrar el contenido correspondiente al ID recibido
    var contenido = document.getElementById(id);
    contenido.style.display = 'block';

    var table1Initialized =  $.fn.DataTable.isDataTable('#example1');
    var table2Initialized =  $.fn.DataTable.isDataTable('#example2');
    
    if($('#example1').css('display') == 'table' && !table1Initialized){
      $('#example1').DataTable(datatTableOptions);
    } 
    if($('#example2').css('display') == 'table' && !table2Initialized){
      $('#example2').DataTable(datatTableOptions);
    } 


  }

