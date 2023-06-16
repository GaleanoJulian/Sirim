<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sesión</title>
    <link rel="stylesheet" href="./css/style-insc-benef.css">
    <link rel="stylesheet" href="./css/Responsive/RD-inscripcion/mobile.css" media="screen and (max-width:399px)">
    <link rel="stylesheet" href="./css/Responsive/RD-inscripcion/tablet.css" media="screen and (min-width:400px)">
    <link rel="stylesheet" href="./css/Responsive/RD-inscripcion/desktop.css" media="screen and (min-width:700px)">
    <script src="./js/opcion-inscripcion.js"></script>
</head>

<body>

    <header class="insc-header">
        <div class="opcion">
            <button onclick="mostrarContenido('insc-usuario')">Inscribirse a una convocatoria</button>
        </div>
        <div class="opcion">
            <button onclick="mostrarContenido('consul-insc')">Consultar estado del proceso</button>
        </div>
        
    </header>

    <main class="inscription-main">
        <section id="insc-usuario" class="inscribir-conv">
            <label for="inscribirse">
                <span>Convocatoria activa</span>
                <input type="text" name="inscribirse" id="inscribirse">
            </label>
        <button type="submit" class="inscribirse-btn">Inscribirse</button>           
        </section>

        <section id="consul-insc" class="inscribir-conv">
            <table class="conv-table">
                <thead>
                    <th>Convocatoria</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th>Cancelar</th>
                </thead>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </section>

    </main>

</body>

</html>