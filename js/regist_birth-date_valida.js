function validarFecha() {
    var fecha = document.getElementById("fechaNacimiento").value;
    var fechaActual = new Date();
    var fechaIngresada = new Date(fecha);
    var edad = fechaActual.getFullYear() - fechaIngresada.getFullYear();

    var fecha_error = document.getElementById("fecha_error");

    // Validar si la fecha ingresada es mayor a la fecha actual y menor a 100 años
    if (fechaIngresada > fechaActual || edad > 110) {
        fecha_error.textContent = "Fecha mayor a 110 años. Por favor ingresa una fecha válida o comunícate con un administrador.";
        fecha_error.style.display = "block";
        return false;
    }

    // Validar si la edad es menor de 18 años
    if (edad < 18) {
        fecha_error.textContent = "Debes ser mayor de edad para continuar.";
        fecha_error.style.display = "block";
        return false;
    }

    fecha_error.style.display = "none";
    return true;
}