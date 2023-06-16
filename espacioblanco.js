            /* formularios en blanco*/

    const form = document.querySelector('form');
  
    form.addEventListener('submit', function (event) {
      event.preventDefault();
  
      const inputs = form.querySelectorAll('input');
      const selects = form.querySelectorAll('select');
  
      let isEmpty = false;
  
      inputs.forEach(function (input) {
        if (input.value.trim() === '') {
          input.classList.add('error');
          isEmpty = true;
        } else {
          input.classList.remove('error');
        }
      });
  
      selects.forEach(function (select) {
        if (select.value === 'Seleccione') {
          select.classList.add('error');
          isEmpty = true;
        } else {
          select.classList.remove('error');
        }
      });
  
      if (isEmpty) {
        const errorMessage = document.createElement('p');
        errorMessage.classList.add('error-message');
        errorMessage.innerText = 'Por favor, complete todos los campos';
        form.appendChild(errorMessage);
      } else {
        form.submit();
      }
    });        /* formularios en blanco*/


    /* Solo ingresar letras en formularios */
function soloLetras(e) {
	var key = e.keyCode || e.which,
	  tecla = String.fromCharCode(key).toLowerCase(),
	  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
	  especiales = [8, 37, 39, 46],
	  tecla_especial = false;

	for (var i in especiales) {
	  if (key == especiales[i]) {
		tecla_especial = true;
		break;
	  }
	}

	if (letras.indexOf(tecla) == -1 && !tecla_especial) {
	  return false;
	}
  }/* Solo ingresar letras */
