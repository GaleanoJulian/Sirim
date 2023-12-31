<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Quienes somos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/cssfile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
</head>
<body >

<!-- menu -->
<section class="zona2">
	<header>
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
</section>

<main class="quienes-somos-main">
	<br><br><br><br><br><br><br>
	<table class="tabla-quienes-somos">
		<tr>
			<td class="q-s-columna">
				<div class="texto-celdas">
				<p>
				La Iglesia Cristiana Menonita de Colombia, ubicada en la Calle 32 # 14-42, piso 2, 
				en la localidad de Teusaquillo de la ciudad de Bogotá, es una empresa que fue constituida como una Sociedad por Acciones Simplificada (S.A.S.) 
				está identificada con NIT 8300395398; se dedica a actividades de asociaciones religiosas. 
				Dentro de sus actividades, realiza labores humanitarias encaminadas a ayudar a personas vulnerables, 
				incluyendo personas migrantes, a través de su Comité de Justicia y Paz.
				</p>
				</div>
			
			</td>
			<td class="q-s-columna">
				<img class="img_tabla" src="./img/iglesia_foto1.jpg"/>
			</td>
		</tr>

		<tr>
			<td>
			<br><br>
			</td>
		</tr>

		<tr>
			<td class="q-s-columna">
				<img class="img_tabla" src="./img/mercados.jpg"/>
			</td>
			<td class="q-s-columna">
				<div class="texto-celdas">
				<p>
				Dentro de sus actividades, el Comité entrega aproximadamente entre 20 y 40 mercados 
				todos los meses en un día que se acuerda entre los miembros previamente, los cuales 
				son obtenidos a partir de las donaciones que recibe. En las entregas intervienen las 
				personas que son miembros del Comité y voluntarios que se han ofrecido con esta labor 
				y otras más que realiza la iglesia. 
				<br>
				Te invitamos a que seas parte de esta familia registrándote e iniciando sesión.
				</p>
				</div>

			</td>

		</tr>
	</table>
</main>

</body>
</html>


