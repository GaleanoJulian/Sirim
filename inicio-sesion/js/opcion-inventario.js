function mostrarContenidoInventario(id) {
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
