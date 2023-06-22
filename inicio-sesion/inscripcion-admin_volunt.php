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
            <button onclick="mostrarContenido('insc-usuario')">Realizar inscripciones</button>
        </div>
        <div class="opcion">
            <button onclick="mostrarContenido('consul-insc')">Consultar y aprobar inscripciones</button>
        </div>
        
    </header>

    <main class="inscription-main">
        <section id="insc-usuario" class="inscribir-conv">
            <div>
                <label for="inscribirse">
                    <span>Convocatoria activa</span>
                    <input type="text" name="inscribirse" id="inscribirse">
                </label>
                <div>
                    <label for="buscar-user">
                        <span>Buscar usuario</span>
                        <div class="input-box_doc">
                            <div class="column">             
                              <div class="select-box">
                                    <select>
                                        <option hidden>Tipo de documento</option>
                                        <option>C.C.</option>
                                        <option>C.E.</optio>
                                        <option>Pasaporte</option>
                                    </select>
                            </div>
                              <input type="text" placeholder="Número de documento" required />
                        </div>
                        <input type="text" placeholder="Usuario" />
                    </label>
                <button type="submit" class="inscribirse-btn">Buscar</button> 
                </div>
            <button type="submit" class="inscribirse-btn">Inscribir</button>  
            </div>
                     
        </section>

        <section id="consul-insc" class="inscribir-conv">
            <div class="cajabuscar">
                <form method="get" id="buscarform">
                    <input type="text" id="s" value="" placeholder="Buscar convocatoria"  />
                    <input class="button" type="submit" value="Buscar" />
                    <i class="search"></i>
                </form>
            </div><br>

            <table class="conv-table">
                <thead>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de inscripción</th>
                    <th>Estado</th>
                    <th>Aprobación</th>
                </thead>
                <tr>
                    <td></td>
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