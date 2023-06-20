function validarFormulario() {
    var nombre = document.getElementsByName("name")[0];
    var apellido = document.getElementsByName("last_name")[0];
    var email = document.getElementsByName("email")[0];
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");
    var doc_type = document.getElementsByName("doc_type")[0];
    var doc_number = document.getElementsByName("doc_number")[0];
    var gender = document.getElementsByName("gender")[0];
    var birth_date = document.getElementById("fechaNacimiento");
    var phone = document.getElementsByName("phone")[0];
    var direction = document.getElementsByName("direction")[0];

    var campos = [
        { campo: nombre, mensaje: "Es obligatorio poner al menos un nombre" },
        { campo: apellido, mensaje: "Es obligatorio poner al menos un apellido" },
        { campo: email, mensaje: "Es obligatoria una dirección de correo electrónica" },
        { campo: password, mensaje: "Es obligatorio definir una contraseña" },
        { campo: confirm_password, mensaje: "Es obligatorio confirmar la contraseña" },
        { campo: doc_type, mensaje: "Es obligatorio indicar el tipo de documento de identidad" },
        { campo: doc_number, mensaje: "Es obligatorio diligenciar el número de documento de identidad" },
        { campo: gender, mensaje: "Es obligatorio indicar un género" },
        { campo: birth_date, mensaje: "Es obligatorio indicar la fecha de nacimiento" },
        { campo: phone, mensaje: "Es obligatorio indicar un número de teléfono" },
        { campo: direction, mensaje: "Es obligatorio indicar su domicilio actual"},
    ];

    var formularioValido = true;

    for (var i = 0; i < campos.length; i++) {
        var campo = campos[i].campo;
        var mensaje = campos[i].mensaje;

        if (campo.value.trim() === "") {
            mostrarError(campo, mensaje);
            formularioValido = false;
        } else {
            ocultarError(campo);
        }
    }

    if (doc_type.value === "Seleccione") {
        mostrarError(doc_type, "Es obligatorio indicar el tipo de documento de identidad");
        formularioValido = false;
    } else {
        ocultarError(doc_type);
    }

    if (gender.value === "Seleccione") {
        mostrarError(gender, "Es obligatorio indicar un género");
        formularioValido = false;
    } else {
        ocultarError(gender);
    }

    return formularioValido;
}

function mostrarError(campo, mensaje) {
    var errorSpan = campo.parentNode.querySelector(".error-message");
    errorSpan.textContent = mensaje;
    errorSpan.style.display = "block";
}

function ocultarError(campo) {
    var errorSpan = campo.parentNode.querySelector(".error-message");
    errorSpan.style.display = "none";
}