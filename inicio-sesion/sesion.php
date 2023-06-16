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
    <link rel="stylesheet" href="./css/Responsive/RD-sesion/mobile-tab.css" media="screen and (max-width:600px)">
</head>
<body>
      
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
            <div id="name"><span>Daniela Ardila</span></div>
        </div>

        <div id="menu-items">

            <div class="item">
                <a href="./perfil_usuario.php">
                    <div class="icon"><img src="images/id-card.png" alt=""></div>
                    <div class="title"><span>Información de usuario</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="./convocatoria.php">
                    <div class="icon"><img src="images/convocatoria.png" id="iconconv" alt=""></div>
                    <div class="title"><span>Convocatorias</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="./inscripcion-admin_volunt.html">
                    <div class="icon"><img src="images/inscripcion.png" alt=""></div>
                    <div class="title"><span>Inscripciones</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="./tarjetas-inventario.php">
                    <div class="icon"><img src="images/inventario.png" alt=""></div>
                    <div class="title"><span>Inventario</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="./entrega-usuario.html">
                    <div class="icon"><img src="images/entrega.png" alt=""></div>
                    <div class="title"><span>Entrega de mercados</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="lista-compras.html">
                    <div class="icon"><img src="images/listacompras.png" alt=""></div>
                    <div class="title"><span>Lista de compras</span></div>
                </a>
                    
            </div>
            
            <div class="separator"></div>
        </div>
        <input class="btn" type="button" value="Cerrar sesión"/><br><br>
    </header>
    <main class="main-container">
        <div class="saludo-container">
            <h1>¡Bienvenido!</h1>
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
</body>
</html>