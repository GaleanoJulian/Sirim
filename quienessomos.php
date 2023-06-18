<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Quienes somos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/estyle2.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
</head>
<body >

<!-- menu -->
<section class="zona1">
			<header>
					<a href="index.php" class="logo">SIRIM</a>
				<nav>
					<ul>
						<li><a href="login.php">iniciar sesion</a></li>
						<li><a href="registro.php">Resgistrate</a></li>
					</ul>
				</nav>
			</header><br><br><br><br><br>
		
            <img src="img/foto3.jpg" class="numero1" >
			<section>
				<br><br><br><br><br><br><!-- menu -->
<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("abajo",window.scrollY>0);
    })
</script>
</section>

<table class="tab" style="width: 40%;" >
<td>
<th><p   style="width: 100; 	font-weight:  bolder;
	" >La Iglesia Cristiana Menonita de Colombia, ubicada en la Calle 32 # 14-42 piso 2, en la localidad  de Teusaquillo de la ciudad de Bogotá (ver Figura 1), es una empresa que fue constituida como  una Sociedad por Acciones Simplificada (S.A.S.) identificada con NIT 8300395398, que se dedica  a actividades de asociaciones religiosas. Dentro de sus actividades, realiza labores humanitarias  encaminadas a ayudar a personas vulnerables, incluyendo personas migrantes, a través de su  Comité de Justicia y Paz.</p></tr>
</th> </td>
</table>
<hr width=50%   size=10 color="#000000" class="linea">

<table class="tab2" style="width: 40%;" >
    <td>
    <th><p class="texto1"  style="width: 100;  	font-weight:  bolder;" >Dentro de sus actividades, el Comité entrega aproximadamente entre 20 y 40 mercados todos  los meses en un día que se acuerda entre los miembros previamente, los cuales son obtenidos  a partir de las donaciones que recibe. En las entregas intervienen las personas que son miembros  del Comité y voluntarios que se han ofrecido con esta labor y otras más que realiza la iglesia. <br>Te invitamos a que seas parete de esta familia registrandote e iniciando sesion. </p></tr>
    </th> </td>
    </table>

    <table class="tab3" style="width: 40%; " >
        <td>
        <th>  <img src="img/mercados.jpg" class="numero2"></tr><th></tr> 

        </th> </td>
        </table>

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
</div>
</body>
</html>


