<?php
//Seguridad de sesiones paginación

session_start(); //Es para iniciar la sesión
error_reporting(0); //Para que no muestre el reporte de error
$varsesion= $_SESSION['email']; // una variable para agarrar el inicio de sesión que se hace por metodo post en email

if($varsesion==null || $varsesion==''){ //un if para preguntar en donde si la variable es nula o vacía
    header ("location:../login.php"); // que me redirija a la página de login
    die(); //y después destruya la sesión
}
?>

<?php include("../conexion-y-logica/ocultarBotonesA-Beneficiario.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sesión</title>
    <link rel="icon" href="./images/logo-iglesia.png" type="image/png">
    <link rel="stylesheet" href="./css/stylesesion.css">
    <script src="./js/rel_sesionperfilus.js"></script>
    <script src="./js/opcion-inscripcion.js"></script>
    <script src="./js/opcion-lista_prod.js"></script>
    <script src="./js/fechas-convocatoria.js"></script>
    <script src="./js/opcion-inventario.js"></script>
    <script src="../js/espacioblanco.js"></script>
    <script src="./js/tabla-entregasAdminVol.js"></script>
    <script src="./js/gestion-usuario.js"></script>
    <script src="./js/site.js"></script>
    
     <!-- data table -->
     <link 
    href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" 
    rel="stylesheet"/>
    <link 
    href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css" 
    rel="stylesheet"/>

    <link rel="stylesheet" href="./css/Responsive/RD-sesion/mobile-tab.css" media="screen and (max-width:600px)">
</head>
<body class="sesion-body">
      
    <header id="sidemenu" class="menu-collapsed">
        <div id="header">
            <div id="title"><span>SIRIM</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>

        <div id="profile">
            <div id="photo"><img src="images/profilephoto.png" alt="Foto del perfil de usuario"></div>
            <div id="name"><span>
            <?php
    
    // Verificar si la sesión está iniciada
    if(isset($_SESSION['email'])) {
        // Mostrar nombre y apellidos
        echo $_SESSION['name'] . " " . $_SESSION['last_name'];
    } else {
        // Redirigir a la página de inicio de sesión si la sesión no está iniciada
        header("Location: ../login.php");
        exit();
    }
?>
            </span></div>
        </div>

        <div id="menu-items">

            <div class="item">
                <a href="./perfil_usuario.php">
                    <div class="icon"><img src="images/id-card.png" alt=""></div>
                    <div class="title"><span>Información de usuario</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <?php if ($id_rol != 3) { ?>

            <div class="item admin-vol">
                <a href="./convocatoria.php" onclick="addDateEvents()">
                    <div class="icon"><img src="images/convocatoria.png" id="iconconv" alt=""></div>
                    <div class="title"><span>Convocatorias</span></div>
                </a>
            </div>
            <div class="separator admin-vol"></div>

            <?php } ?>

            <div class="item">
                
                <a href="../conexion-y-logica/mostrar_inscripcion_user.php">
                    <div class="icon"><img src="images/inscripcion.png" alt=""></div>
                    <div class="title"><span>Inscripciones</span></div>
                </a>
            </div>

            <div class="separator"></div>

            <?php if ($id_rol != 3) { ?>

            <div class="item">
                <a href="./tarjetas-inventario.php">
                    <div class="icon"><img src="images/inventario.png" alt=""></div>
                    <div class="title"><span>Inventario</span></div>
                </a>
            </div>

            <div class="separator admin-vol"></div>
            <?php } ?>

            <div class="item">
                <a href="../conexion-y-logica/mostrar_entrega-user.php" onclick="loadDeliveryTable()">
                    <div class="icon"><img src="images/entrega.png" alt=""></div>
                    <div class="title"><span>Entrega de mercados</span></div>
                </a>
            </div>
            
            <div class="separator admin-vol"></div>
            
            <?php if ($id_rol != 3) { ?>

            <div class="item admin-vol">
                <a href="lista-compras.php">
                    <div class="icon"><img src="images/listacompras.png" alt=""></div>
                    <div class="title"><span>Lista de compras</span></div>
                </a>
                    
            </div>
            
            <div class="separator admin-vol"></div>

            <div class="item admin-vol">
                <a href="gestion-usuario.php" onclick="loadGestionTable()">
                    <div class="icon"><img src="images/gestion_user.png" alt=""></div>
                    <div class="title"><span>Gestión de usuarios</span></div>
                </a>
            </div>
            <div class="separator admin-vol"></div>
            <?php } ?>          
            

        </div>
        <input class="btn-sesion" type="button" value="Cerrar sesión" onclick="window.location.href='./cerrar_sesion.php'"/><br><br>
    </header>
    <main class="main-container">
        <div class="saludo-container">
            <h1><?php
    
    // Verificar si la sesión está iniciada
    if(isset($_SESSION['email'])) {
        // Mostrar nombre y apellidos
        echo "¡Hola " . $_SESSION['name'] . " " . $_SESSION['last_name'] . "!";
    } else {
        // Redirigir a la página de inicio de sesión si la sesión no está iniciada
        header("Location: ../login.php");
        exit();
    }
?></h1>
        </div>
        
    </main>

    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle('body-expanded');
        }); 
    </script>

    <script>
        const items = document.querySelectorAll('.item');
        items.forEach(item => {
        item.addEventListener('click', () => {
            menu.classList.remove("menu-expanded");
            menu.classList.add("menu-collapsed");
            document.querySelector('body').classList.remove('body-expanded');
        });
    });
    </script>

        <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Data table -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

    <!-- bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="./js/tabla.js"></script>

</body>
</html>