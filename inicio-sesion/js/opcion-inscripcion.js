async function mostrarContenidoinscripcion(id) {
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
    var table3Initialized =  $.fn.DataTable.isDataTable('#example3');
    
    if($('#example1').css('display') == 'table' && !table1Initialized){
      var tableData = (await readData("getUsersWithRole")).data;
      loadTableInscribirUser(tableData, "example1");
      $('#example1').DataTable(datatTableOptions);
      addInsertInscEvent();

    } 
    if($('#example2').css('display') == 'table' && !table2Initialized){
      var tableData = (await readData("getUsersInscripcion")).data;
      loadTableConsultarInsc(tableData, "example2");      
      $('#example2').DataTable(datatTableOptions);
      setUserInscripStatus();
      addChangeInscripStatus();

    }

    // Tabla segundo botón de inscripción beneficiario

    if($('#example3').css('display') == 'table' && !table3Initialized){
      var tableData = (await readData("getUsersInscInfo")).data;
      loadTableConsInscBenef(tableData, "example3"); 
      $('#example3').DataTable(datatTableOptions);

      //hacer lo mismo que el anterior if pero cambiando la función que llama la tabla

    } 



  }

