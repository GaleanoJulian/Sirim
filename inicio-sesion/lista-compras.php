<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Lista compras</title>
    <link rel="stylesheet" href="./css/style-lista_compras.css">
    <script src="./js/opcion-lista_prod.js"></script>
</head>

<body>
    <header>
        <h1>Lista de compras</h1>
        <section class="opt-buttons">
            <div class="opcion">
                <button onclick="mostrarContenidoListaProductos('generar-lista')">Generar listado</button>
            </div>
            <div class="opcion">
                <button onclick="mostrarContenidoListaProductos('consulta-listas')">Consultar listados</button>
            </div>
            <div class="opcion">
                <button onclick="mostrarContenidoListaProductos('personalizar-lista')">Personalizar productos para listados</button>
            </div>
        </section>
    </header>

    <main class="main-lista_prod">
        <section id="generar-lista" class="opt-container">
            <div class="lista-productos">
                <section id=tabla-GenLista>
                    <br><br>
                    <?php
                        include("tabla-generarListado.php")
                    ?>
                </section>
                <div class="btn-GenList">
                    <button type="submit" name="revisarLista" class="revision">Solicitar revisión</button>
                    <button type="submit" name="generarLista" class="revision">Generar lista</button> 
                </div>
 
            </div>
        </section>

        <section id="consulta-listas" class="opt-container">
            <div class="lista-productos">
                <section id=tabla-GenLista>
                    <br><br>
                    <?php
                        include("tabla-consultarListado.php")
                    ?>
                </section>
    
            </div>
        </section>          
        
        <section id="personalizar-lista" class="opt-container">
            <div class="lista-productos">
                
                <br>

                <button type="submit" class="revision">Agregar producto nuevo</button> 
    
                <section id=tabla-GenLista>
                    <br><br>
                    <?php
                        include("tabla-ListaPersonalizarProductos.php")
                    ?>
                </section>

                <button type="submit" class="revision">Guardar cambios</button> 
    
            </div>
        </section>
        
    </main>

</body>
</html>