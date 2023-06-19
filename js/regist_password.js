function validarContraseña() {
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var password_error = document.getElementById("password_error");

    if (password !== confirm_password) {
        password_error.style.display = "block";
    } else {
        password_error.style.display = "none";
    }
}