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
            <button onclick="mostrarContenidoinscripcion('insc-usuario')">Inscribirse a una convocatoria</button>
        </div>
        <div class="opcion">
            <button onclick="mostrarContenidoinscripcion('consul-insc')">Consultar estado del proceso</button>
        </div>
        
    </header>

                    <?php
                        include("../conexion-y-logica/conexion_insc-benef-_fechaConv.php");
                    ?>

    <main class="inscription-main">
        <section id="insc-usuario" class="inscribir-conv">
            <div class="centrar-form">
                <label for="inscribirse">
                    <span>Convocatoria activa</span>
                    <input type="text" value="<?php echo $fechaEntrega;?>" name="inscribirse" id="inscribirse">
                </label>
            <button type="submit" class="inscribirse-btn" onclick="btnInscBenef()">Inscribirse</button>
            </div>           
        </section>

        <section id="consul-insc" class="inscribir-conv">
                <section id=tabla-historialBenef>
                    <br><br>
                    <?php
                        include("tabla_consultarInscripcion-Benef.php")
                    ?>
                </section>
        </section>

    </main>

</body>

</html>