<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>ISBoosting</title>
</head>

<body>
	
	<header>
		<!--BARRA DE NAVEGACION CON SKIN OSCURA -->
		<nav class="navbar  navbar-dark bg-dark navbar-expand-sm " data-spy="affix" data-offset-top="197">
		<!-- LOGO E IMAGEN DE LA EMPRESA-->
			<a class="navbar-brand" href="index.php">
			    <img src="bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="Logo Bootsrap">
			   		ISBoosting
		  	</a>
		<!-- BOTONCITO PARA MOVILES-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
 			 </button>
		<!-- ELEMENTOS DE NAVEGACION-->	
		  	<div div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			    <div class="navbar-nav mr-auto text-center">
				    <a class="nav-item nav-link active mr-2" href="index.php"><strong>INICIO</strong></a>
				    <a class="nav-item nav-link mr-2" href="Servicios.php"><strong>SERVICIOS</strong></a>
				    <a class="nav-item nav-link mr-2" href="SeBooster.php"><strong>SE ELOBOOSTER</strong></a>
				    <a class="nav-item nav-link mr-2" href="Contacto.php"><strong>CONTACTO</strong></a>
				    <a class="nav-item nav-link" href="FAQ.php"><strong>FAQ</strong></a>

				</div>
		<!-- BOTONES EXTRA DE REDES SOCIALES -->
				<div class="d-flex flex-row justify-content-center ">
					<!-- PHP - IF BOTONES SIN SESION -->
					<?php
					if(!isset($_SESSION['usuario'])){?>
					<a href="IniciaSesion.php" class=""><button class="btn btn-primary">Inicia Sesion</button></a>
					
					
					
					<!-- PHP - ELSE BOTONES SESION INICIADA -->
					<?php }else{?>
					<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Perfil</button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="#">Mi perfil</a>
					    <a class="dropdown-item" href="#">Opciones</a>
					  </div>
					</div>
					<a href="partials/Cerrar_Sesion.php"><button class="btn btn-info">Cerrar Sesion</button></a>
					<?php } ?>			 
				</div>
		   </div>
		</nav>
	</header>
		
		<!-- CARUSEL -->
		<div class="row">
			<div class="col-12">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="https://picsum.photos/1080/300?random" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="https://picsum.photos/1080/300?random" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="https://picsum.photos/1080/300?random" alt="Third slide">
				    </div>
				  </div>
				</div>
			</div>
		</div>

		<!-- PARTE SEPARADA -->
		<div class="row">
			<div class="sube col-12 col-md-6 ">
				<center>
					<h2 class="mt-2">¡Sube de liga ahora!</h2>
					<h4>Sea cual sea tu rango, nosotros te haremos subir al que desees.</h4>
					<p>Simplemente tienes que colocar tu division actual y tu division deseada en la seccion compras y nosotros haremos el resto, te llevaremos a la division deseada de la manera mas rapida y segura.</p>
				</center>
			</div>
			<div class="boostea col-12 col-md-6 ">
				<center>
					<h2 class="mt-2">¡Conviertete en Elobooster!</h2>
					<h4>Comienza a jugar por dinero y unete a nuestra comunidad.</h4>
					<p>Registrate en nuestra pagina web y participa de nuestra comunidad de jugadores.</p>
				</center>
			</div>
		</div>
		
			
		


	<!-- Footer -->
	<footer class="font-small pie pb-5 mt-3 row ">
		<!-- Copyright -->  
		<div class="col">
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
	    		<a href="index.html"> ISBoosting.com</a>
	  		</div>
		</div>  
	</footer>
	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>