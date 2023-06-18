<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>SIRIM</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/cssfile.css">
</head>
<body style="height: 100%;">
	<div class="container">
<!-- menu -->
<section class="zona1">
			<header>
					<a href="index.php" class="logo">SIRIM</a>
				<nav>
					<ul>
						<li><a href="login.php">iniciar sesion</a></li>
						<li><a href="registro.php">Resgistrate</a></li>
						<section class="buttons">
							<a href="https://www.facebook.com/iglesiamenonitateusaquillo/?locale=es_LA" target=”_blank” class="fa-brands fa-facebook"></a>
							<a href="https://www.instagram.com/sbmccol/?hl=es-la" class="fa-brands fa-instagram" target=”_blank”></a>
							<a href="https://www.youtube.com/@iglesiateusaquillo864/featured" class="fa-brands fa-youtube"target=”_blank”></a>
						  </section>
					</ul>
				</nav>
			</header>
			<section>
				<script type="text/javascript">
					window.addEventListener("scroll", function(){
						var header = document.querySelector("header");
						header.classList.toggle("abajo",window.scrollY>0);
					})
				</script>
				<!--Fin  menu -->
				<br><br><br><br><br><br>
				

<!-- inicio carrusel -->
		<div class="slider">
			<!-- fade css -->
			<div class="myslide fade">
				<div class="txt">
				</div>
				<img src="img/foto1.jpg" style="width: 100%; height: 100%;" >
			</div>
			<div class="myslide fade">
				<div class="txt">
					<p><br>El comité de justicia y paz de la iglesia menonita ubicada en la ciudad de Bogotá en la localidad de Teusaquillo, realiza labores humanitarias para las personas vulnerables, el comité entrega cierta cantidad de mercados todos los meses en colaboración con personas voluntarias.</p>
				</div>
				<img src="img/foto2.jpg" style="width: 100%; height: 100%;">
			</div>
			
			<div class="myslide fade">
				<div class="txt">
					<h1> </h1>
					<p> <br>Mejora lo ya que ya existe, perimitiendo a muchas mas presonas saber hacerca de este proceso y que sea mas facil a la hora de</p>
				</div>
				<img src="img/foto3.jpg" style="width: 100%; height: 100%;">
				
			</div>
			
			<div class="myslide fade">
				<div class="txt">
					
					<p><br>crea un cuenta y forma parte de esta familia.</p>
				</div>
				<img src="img/foto4.jpg" style="width: 100%; height: 100%;">
			</div>
			
			<!-- onclick js -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			
			<div class="dotsbox" style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
				<span class="dot" onclick="currentSlide(4)"></span>
			</div><!-- onclick js -->
		</div><!-- fin carrusel -->

	<script src="jsfile.js"></script><!-- Carrusel-->


<br><br><br><br><br>
	<!--   Tarjetas-->
<center>
	<h6 style="color: rgb(20, 20, 20);">Te puede intesar</h6>
</center>
<div class="title-cards">
	<h2></h2>
</div>
<div class="container-card">

<div class="card">
<figure>
	<img src="img/foto3.jpg" >
</figure><br><br><br>
<div class="contenido-card">
	<h3>Quienes somos</h3>
	<p>somos una iglesia que tiene como lavor ayudar al progimo.</p>
	<a href="quienessomos.php">Leer Más</a>
</div>
</div>
<div class="card">
<figure>
	<img src="img/convocatoria.jpg" >
</figure><br><br><br>
<div class="contenido-card">
	<h3>Convocatorias</h3>
	<p>Ingesa para saber cunado son las convocatorias e incripciones de las ayudas.</p>
	<a href="convocatoria.php">Leer Más</a>
</div>
</div>
<div class="card">
<figure>
	<img src="img/contacto.png">
</figure><br><br><br>
<div class="contenido-card">
	<h3>contactanos</h3>
	<p>Si tienes alguna pregunta o quieres saber algo de mas, no dudes y mandanos un mensaje</p>
	<a href="contacto.php">Leer Más</a>
</div>
</div>
</div>
<!--Fin   Tarjetas-->
	<br><br><br><br><br>
	<!-- inicio MAPA  -->
	<center>
		<table style="width: 50%;">
			<tr><th>
				<h6 style="color: rgb(20, 20, 20);">Donde esta ubicada</h6>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.850953984138!2d-74.07301782610799!3d4.620666842348463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99840d8d1d8d%3A0x8ad363d2b23db39!2sAc.%2032%20%2314-18%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1683774640864!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<tr><th>
			</table>
	</center> <br><br><br><br><!--fin MAPA  -->

	<!--Boton arribba  -->

	<button class="btn-scrolltop" id="btn_scrolltop">
		<i class="fas fa-chevron-up"></i>
	  </button>
	  <script>
		const btn_scrolltop = document.getElementById("btn_scrolltop")
		  btn_scrolltop.addEventListener('click', () => {
			window.scrollTo(0, 0)
		  })
	
		window.onscroll = () => {
		  add_btn_scrolltop()
		}
	
		const add_btn_scrolltop = () => {
		  if (window.scrollY < 300) {
			btn_scrolltop.classList.remove("btn-scrolltop-on")
		  } else {
			btn_scrolltop.classList.add("btn-scrolltop-on")
		  }
		}
	  </script>	<!-- fin Boton arribba  -->


	<!-- FIN Y DERECHOS ETC  -->
	<table style="width: 100%;"bgcolor="black">
		<tr><th>
			<p style="color: aliceblue;"center>
				<br>
				<BR><br><br><br>
				Todos los derechos al gaez numero 1 de la ficha 2620597</p>	
				<br><p style="color: aliceblue;"center>nombres  </p>
				<br><p style="color: aliceblue;"center>Proyecto para la sustentacion final. </p>

				<BR><br><br><br>
					<tr><th>
		</table>	<!-- FIN Y DERECHOS ETC  -->
		</div>
</body>
</html>


