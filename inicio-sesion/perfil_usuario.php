<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styleinfo_usuario.css">
</head>
<section class="container">
    <header>Perfil de usuario</header>
   
    <form action="#" class="form">
      
        <div class="input-box">
        <label>Nombres</label>
        <input type="text" placeholder="Ingrese su nombre" required />
        </div>

      <div class="input-box">
        <label>Apellidos</label>
        <input type="text" placeholder="Ingrese sus apellidos" required />
      </div>

      <div class="input-box address">
        <label>Documento de identificación</label><br> 
        <div class="column">             
          <div class="select-box">
              <select>
              <option hidden>Tipo de documento</option>
              <option>C.C.</option>
              <option>C.E.</option>
              <option>Pasaporte</option>
            </select>
          </div>
          <input type="text" placeholder="Número de documento" required />
        </div>

        <div class="column">
           
            <div class="input-box">
                <script>
                    function validarFecha() {
                        var fecha = document.getElementById("fechaNacimiento").value;
                        var fechaActual = new Date();
                        var fechaIngresada = new Date(fecha);
                        var edad = fechaActual.getFullYear() - fechaIngresada.getFullYear();
            
                        // Validar si la fecha ingresada es mayor a la fecha actual y menor a 100 años
                        if (fechaIngresada > fechaActual || edad > 100) {
                            alert("Fecha inválida. Por favor, ingresa una fecha válida.");
                            return false;
                        }
            
                        // Validar si la edad es menor de 18 años
                        if (edad < 18) {
                            alert("Debes ser mayor de edad para continuar.");
                            return false;
                        }
            
                        return true;
                    }
                </script>
              <label>Fecha de nacimiento</label>
              <input type="date" id="fechaNacimiento" placeholder="Ingrese su fecha de nacimiento" onsubmit="return validarFecha();" required />
            </div>
            <div class="input-box">
                <label>Género</label>
                <div class="select-box">
                    <select>
                    <option hidden>Seleccione una opción</option>
                    <option>Hombre</option>
                    <option>Mujer</option>
                    <option>Otro</option>
                  </select>
                </div>
              </div>
    
        </div>
      
      <div>
        <br><label>Dirección</label>
        <input type="text" placeholder="Ingrese su dirección" required />
      </div>

      <div class="input-box">
        <label>Número de teléfono</label>
        <input type="tel" placeholder="Ingresa tu número de teléfono" required />
      </div>

      <input class="btn" type="submit" value="Actualizar datos">
    </form>
  </section>
</body>
</html>