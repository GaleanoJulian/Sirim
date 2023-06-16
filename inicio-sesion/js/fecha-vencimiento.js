function validarFecha() {
    var fechaVencimiento = document.getElementById('fechaVencimiento').value;
    var fechaActual = new Date();
    var fechaMaxima = new Date();
    fechaMaxima.setFullYear(fechaMaxima.getFullYear() + 5);

    if (fechaVencimiento < fechaActual.toISOString().slice(0, 10) || fechaVencimiento > fechaMaxima.toISOString().slice(0, 10)) {
      document.getElementById('fechaError').textContent = 'La fecha de vencimiento no puede ser anterior a la fecha actual ni superior a 5 años a partir de la fecha actual.';
    } else {
      document.getElementById('fechaError').textContent = '';
    }
  }