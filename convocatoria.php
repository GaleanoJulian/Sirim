<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Convocatorias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/estyle2.css">
</head>
<body>
    <header class="fixed-nav">
            <a href="index.php" class="logo">SIRIM</a>
        <nav>
            <ul>
                <li><a href="login.php">Iniciar sesión</a></li>
                <li><a href="registro.php">Resgistrate</a></li>
            </ul>
        </nav>
        <script type="text/javascript">
    		window.addEventListener("scroll", function(){
    		var header = document.querySelector("header");
        	header.classList.toggle("abajo",window.scrollY>0);
   			})
		</script>
    </header>

<main>

    <table class="tabla_1columna">
        <tr>
            <td>
                <div class="texto-celdas">
                    Te invitamos a conocer las fechas importantes relacionadas con nuestra
                    próxima entrega: <br><br>
                    <div>
                        <label>Próxima entrega de mercados: </label> <br><br>
                        <input class="fechas-convocatoria" type="text"/>
                    </div>
                    <div>
                        <label>Inicio de las inscripciones: </label> <br><br>
                        <input class="fechas-convocatoria" type="text"/>
                    </div>
                    <div>
                        <label>Fin de las inscripciones: </label> <br><br>
                        <input class="fechas-convocatoria" type="text"/>
                    </div>
                    Si deseas inscribirte, por favor inicia tu sesión y realiza 
                    el proceso de inscripción: <br><br>

                    <button onclick="window.location.href = './login.php'">Iniciar sesión</button>


                </div>
            </td>
        </tr>

        <tr>
			<td>
			<br><br>
			</td>
		</tr>

        <tr>
            <td>
                <div class="texto-celdas2">
                Si quieres saber más acerca de quienes somos y de 
                lo que hacemos, te invitamos a ver esta información 
                en nuestra página de "Quienes somos" al cual puedes
                acceder con el siguiente botón:<br><br>
                <button onclick="window.location.href = './quienessomos.php'">Quienes somos</button>
                </div>
            </td>
        </tr>
    </table>

</main>


<?php
        include("./conexion-y-logica/conexion_convocatoria-index.php");
    ?>
</body>
</html>