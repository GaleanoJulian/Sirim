<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sesión</title>
    <link rel="stylesheet" href="./css/style-insc-adm_vol.css">
    <script src="./js/opcion-inscripcion.js"></script>
</head>

<body>

    <header class="insc-header">
        <div class="opcion">
            <button onclick="mostrarContenidoinscripcion('insc-usuario')">Realizar inscripciones</button>
        </div>
        <div class="opcion">
            <button onclick="mostrarContenidoinscripcion('consul-insc')">Consultar y aprobar inscripciones</button>
        </div>
        
    </header>

    <main class="inscription-main">
        <section id="insc-usuario" class="inscribir-conv">
            <div>
                    <?php
                        include("../conexion-y-logica/conexion_insc-admin-Vol_fechaConv.php");
                    ?>
                <div>
                    <label for="inscribirse">
                        <span>Convocatoria activa</span>
                        <input class="conv-activa" type="text" value="<?php echo $fechaEntrega;?>" name="inscribirse" id="inscribirse">
                    </label>
                </div>
                <div>
                    <section id=tabla-historial>
                        <br><br>
                        <?php
                        include("tabla-inscribir-usuario.php")
                        ?>
                    </section> 
                </div> 
            </div>
                     
        </section>

        <section id="consul-insc" class="inscribir-conv">
        <div>
                    <section id=tabla-historial>
                        <br><br>
                        <?php
                        include("tabla-consultar-aprobarInscrip.php")
                        ?>
                    </section> 
                </div> 
        </section>

    </main>

</body>

</html>