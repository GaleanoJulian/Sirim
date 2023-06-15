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
    });
