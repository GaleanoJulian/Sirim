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
  }