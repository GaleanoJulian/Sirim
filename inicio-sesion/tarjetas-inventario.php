<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="./css/style-tarjetas-inv.css">
    <link rel="stylesheet" href="./css/Responsive/RD-tarjetas/small.css" media="screen and (max-width:399px)">
    <link rel="stylesheet" href="./css/Responsive/RD-tarjetas/mobile.css" media="screen and (min-width:400px)">
    <link rel="stylesheet" href="./css/Responsive/RD-tarjetas/tablet.css" media="screen and (min-width:600px)">
    <link rel="stylesheet" href="./css/Responsive/RD-tarjetas/desktop.css" media="screen and (min-width:800px)">
    <link rel="stylesheet" href="./css/style-consultar-productos.css">
    <link rel="stylesheet" href="./css/style-registrar-productos.css">
    <link rel="stylesheet" href="./css/style-armar-paquetes.css">
    <link rel="stylesheet" href="./css/style-paquetes-stock.css">
    <script src="./js/fecha-vencimiento.js"></script>
    <script src="./js/opcion-inventario.js"></script>

</head>
<body>
<div class="tarjetas">
    <header class="tarj-header">¿Qué desea hacer?</header><br>

    <main class="container-cards">
            <section class="card-container1 section-container">
                <div class="card-inventario">
                    <figure>
                        <img src="./images/productos.png" alt="Dibujo de un estante de un estante lleno de productos">
                    </figure>
                    <div class="card-content">
                        <h3>Consultar productos en stock</h3>
                        <p>Ingrese aquí para ver los productos disponibles en el almacén y su información asociada.</p><br>
                        <button class="btn-tarjeta" onclick="mostrarContenidoInventario('consultar-productos')">Ingresar</button>
                    </div>
                </div>
            </section>
        
            <section class="card-container2 section-container">
                <div class="card-inventario">
                    <figure>
                        <img src="./images/ingreso-prod.jpg" alt="Dibujo de persona ingresando productos al almacén">
                    </figure>
                    <div class="card-content">
                        <h3>Registrar productos nuevos</h3>
                        <p>Ingrese aquí para registrar los productos nuevos que van a ingresar al almacén.</p><br><br>
                        <button class="btn-tarjeta" onclick="mostrarContenidoInventario('registrar-productos')">Ingresar</button>
                    </div>
                </div>
            </section>
        
            <section class="card-container3 section-container">
                <div class="card-inventario">
                    <figure>
                        <img id="img3" src="./images/armar-paquetes.jpg" alt="Dibujo de un paquete gigante con productos y una familia al rededor">
                    </figure>
                    <div class="card-content">
                        <h3>Armar paquetes de productos</h3>
                        <p>Ingrese aquí para registrar los paquetes que se van a armar, indicando los productos.</p><br>
                        <button class="btn-tarjeta" onclick="mostrarContenidoInventario('armar-paquetes')">Ingresar</button>
                    </div>
                </div>
            </section>
        
            <section class="card-container4 section-container">
                <div class="card-inventario">
                    <figure>
                        <img src="./images/paquetes-stock.png" alt="Dibujo de un estante lleno de paquetes armados con productos">
                    </figure>
                    <div class="card-content">
                        <h3>Consultar paquetes en stock</h3>
                        <p>Ingrese aquí para consultar paquetes que se encuentran en el almacén listos para asignación y/o entrega.</p>
                        <button class="btn-tarjeta" onclick="mostrarContenidoInventario('paquetes-stock')">Ingresar</button>
                    </div>
                </div>
            </section>
        
    </main>

</div>


<section>
<br><br><br>

<!-- Contenido primera tarjeta -->

            <div id="consultar-productos" class="productos-paquetes" style="display: none;">

                <section class="tablas-inventario">
                    <?php
                        include("tabla-consultarProductos.php")
                    ?>
                </section>

                <div class="row-inventario">
                    <input class="btn" name="regresar" onclick="mostrarTarjeHeader()" type="submit" value="Regresar">
                </div>
            </div>

<!-- Contenido segunda tarjeta -->

            <div id="registrar-productos" class="productos-paquetes" style="display: none;">
                <div class="container">
                    <header>Registrar productos</header>
                
                    <form action="#" class="form">
                        
                    <div class="input-box">
                            <label>Presentación</label><br>
                            <div class="select-box">
                                <select class="producto_"></select>
                            </div>         
                        </div> 

                        <div class="input-box">
                            <label>Presentación</label><br>
                            <div class="select-box">
                                <select class="presentacionProd_">
                                <option hidden>Escoja presentación</option>
                                <option>Bolsa o paquete</option>
                                <option>Botella</option>
                                <option>Caja</option>
                                <option>A granel</option>
                                <option>Sachet</option>
                                <option>Lata</option>
                                <option>Unidad</option>
                            </select>
                            </div>         
                        </div>           
                    
                        <div class="column">
                    
                            <div class="input-box">
                                <label>Contenido</label>
                                <input type="text" placeholder="Por ejemplo: 500" required />
                            </div>

                            <div class="input-box">
                                <label>Unidad</label>
                                <div class="select-box">
                                    <select>
                                        <option hidden>Por ejemplo: Gramos</option>
                                        <option>Gramos</option>
                                        <option>Kilogramos</option>
                                        <option>Litros</option>
                                        <option>Mililitros</option>
                                        <option>Onzas</option>
                                        <option>Litros</option>
                                    </select>
                                </div>
                            </div>

                        </div>    
                                

                        <div class="input-box">
                            <label>Fecha de vencimiento</label>
                            <input type="date" id="fechaVencimiento" placeholder="Ingrese fecha de vencimiento" onchange="validarFecha();" required />
                            <p id="fechaError"></p>
                        </div>

                        <div class="input-box">
                            <label>Cantidad</label>
                            <input type="text" placeholder="¿Cuántos van a ingresar?" required />
                        </div>

                        <div class="column">
                    
                            <div class="input-box">
                                <input class="btn" type="submit" value="Ingresar">
                            </div>

                            <div class="input-box">
                                <input class="btn" name="regresar" onclick="mostrarTarjeHeader()" type="submit" value="Regresar">
                            </div>


                        </div> 
                        
                    </form>
                </div>
                

            </div>

<!-- Contenido tercera tarjeta -->

            <div id="armar-paquetes" class="productos-paquetes" style="display: none;">
                <section class="container">
                    <header>Armar paquetes</header>
                
                    <form action="#" class="form">

                        <div class="input-box">
                            <label>Seleccionar producto</label><br>
                            <div class="select-box">
                                <select>
                                <option hidden>Escoja producto</option>
                                <option>Arroz</option>
                            </select>
                            </div>         
                        </div> 

                        <div class="input-box">
                            <label>Seleccionar presentación</label><br>
                            <div class="select-box">
                                <select>
                                <option hidden>Escoja presentación</option>
                                <option>Bolsa o paquete</option>
                                <option>Botella</option>
                                <option>Caja</option>
                                <option>A granel</option>
                                <option>Sachet</option>
                                <option>Lata</option>
                                <option>Unidad</option>
                            </select>
                            </div>         
                        </div>
                        
                        <div class="column">
                    
                            <div class="input-box">
                                <label>Seleccionar contenido</label>
                                <input type="text" placeholder="Por ejemplo: 500" required />
                            </div>

                            <div class="input-box">
                                <label>Seleccionar unidad</label>
                                <div class="select-box">
                                    <select>
                                        <option hidden>Por ejemplo: Gramos</option>
                                        <option>Gramos</option>
                                        <option>Kilogramos</option>
                                        <option>Litros</option>
                                        <option>Mililitros</option>
                                        <option>Onzas</option>
                                        <option>Litros</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="input-box">
                            <label>Seleccionar cantidad</label><br>
                            <div class="select-box">
                                <input list="Cantidad">
                                <datalist id="productos">
                                    <option value="1"></option>
                                    <option value="2"></option>
                                </datalist>

                            </div>         
                        </div>

                        <input class="btn" type="submit" value="Adicionar al paquete">
                        
                    </form>

                </section>
                
                <section>

                    <br><br>
                    <section class="tablas-inventario">
                        <?php
                            include("tabla-armar-paquetesInventario.php")
                        ?>
                    </section>

                        <div class="row">
                            <div>
                                <input class="btn" type="submit" value="Editar">
                            </div>
                            <div>
                                <input class="btn" type="submit" value="Guardar cambios">
                                <br><br>
                            </div>
                        </div>
                </section>

                <section class="container">
                    
                
                    <form action="#" class="form">

                        <div class="input-box">
                            <label>Cantidad de paquetes</label>
                            <input type="text" placeholder="Por ejemplo: 40" required />
                        </div>

                        <input class="btn" type="submit" value="Crear paquetes">

                    <div class="input-box">
                        <input class="btn" name="regresar" onclick="mostrarTarjeHeader()" type="submit" value="Regresar">
                    </div>
                        
                    </form>
                </section>

            </div>

<!-- Contenido cuarta tarjeta -->

            <div id="paquetes-stock" class="productos-paquetes" style="display: none;">
                <section class="entrega-user">
                    <section class="tablas-inventario">
                        <?php
                            include("tabla-paquetes-stockInventario.php")
                        ?>
                    </section>
                </section>

                <div class="row">

                        <input class="btn" type="submit" name="regresar" onclick="mostrarTarjeHeader()" value="Regresar">
                </div> 

            </div>
        </section>
    
</body>
</html>