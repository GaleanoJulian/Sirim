//no sirve
async function addDateEvents(){

  await new Promise(resolve => setTimeout(resolve, 1000));

  var fechaInicioInput = document.getElementById("fecha-inicio");
  var fechaFinInput = document.getElementById("fecha-fin");
  var botonEnvio = document.querySelector("input[type=submit]");

  fechaInicioInput.onchange = function() {
    var fechaInicio = new Date(this.value);
    var userTimezoneOffset = fechaInicio.getTimezoneOffset() * 60000;
    fechaInicio = new Date(fechaInicio.getTime() + userTimezoneOffset);  
    var fechaActual = new Date();
    fechaActual.setHours(0,0,0,0); //usar solo fecha, ignorar hms
    
    if (fechaInicio < fechaActual) {
      document.getElementById("fecha_error_inicio").innerText = "La fecha de inicio debe ser igual o posterior a la fecha actual.";
      botonEnvio.disabled = true;
    } else {
      document.getElementById("fecha_error_inicio").innerText = "";
      botonEnvio.disabled = false;
    }
  };

  fechaFinInput.onchange = function() {
    var fechaInicio = new Date(fechaInicioInput.value);
    var fechaFin = new Date(this.value);
    var diferenciaDias = (fechaFin - fechaInicio) / (1000 * 60 * 60 * 24);
    
    if (fechaFin <= fechaInicio) {
      document.getElementById("fecha_error_fin").innerText = "La fecha de fin debe ser posterior a la fecha de inicio.";
      botonEnvio.disabled = true;
    } else if (diferenciaDias > 45) {
      document.getElementById("fecha_error_fin").innerText = "La diferencia de tiempo entre la fecha de inicio y la fecha de fin debe ser igual o menor a 45 días.";
      botonEnvio.disabled = true;
    } else {
      document.getElementById("fecha_error_fin").innerText = "";
      botonEnvio.disabled = false;
    }
  };

  $('#example').DataTable(datatTableOptions);
}