<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<title>Se Booster</title>
</head>
<body>
	<!-- BARRA DE NAVEGACION COMUN -->
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
				    <a class="nav-item nav-link mr-2" href="index.php"><strong>INICIO</strong></a>
				    <a class="nav-item nav-link mr-2" href="Servicios.php"><strong>SERVICIOS</strong></a>
				    <a class="nav-item nav-link active mr-2" href="SeBooster.php"><strong>SE ELOBOOSTER</strong></a>
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
					<a href="#"><button class="btn btn-info">Cerrar Sesion</button></a>
					<?php } ?>			 
				</div>
		   </div>
		</nav>
	</header>

	<section class="main container mt-3">
		<div class="row">
			<!-- TITULO -->
			<div class="col-12">
				<h1>Unete a ISBoosting!</h1>
			</div>
			<!-- SUBTITULO -->
			<div class="col-12 mt-2">
				<h4 class="color_h4"><strong>¿JUEGAS A DIARIO A LEAGUE OF LEGENDS?<br>ENTONCES JUEGA POR DINERO!</strong></h4><hr>
			</div>
			<!-- CARDS -->
			<div class="col-12 mt-2 ">
				<div class="row widgets justify-content-center mr-auto">

					<div class="col-md-4 mt-5">
					    <center><i class="fas fa-user-clock fa-4x"></i>
					    <h5 class="font-weight-bold my-4">Disponibilidad horaria</h5>
					    <p class="grey-text mb-md-0 mb-5">Juega cuando quieras, con un simple boton empezaras a jugar a league of legends por dinero!
					    </p></center>
					</div>

					<div class="col-md-4 mt-5">
						<center><i class="fas fa-trophy fa-4x"></i>
						<h5 class="font-weight-bold my-4">Disponibilidad de divisiones</h5>
						<p class="grey-text mb-md-0 mb-5">Si eres un jugador de nivel ORO en adelante puedes comenzar a participar de nuestro sistema.
						</p></center>
					</div>

					<div class="col-md-4 mt-5">
						<center><i class="fas fa-dollar-sign fa-4x"></i>
						<h5 class="font-weight-bold my-4">Tus victorias Tu beneficio</h5>
						<p class="grey-text mb-0">Cada victoria que realices ira depositando dinero en tu pozo de pago, una vez completo podras retirar tus ganancias
						</p></center>
					</div>

					<div class="col-md-4 mt-5">
					    <center><i class="fas fa-cogs fa-4x"></i>
					    <h5 class="font-weight-bold my-4">Sistema automatizado</h5>
					    <p class="grey-text mb-md-0 mb-5">Las cuentas con las que jugaras se te asignaran automaticamente, asi no tendras que esperar para recibir una cuenta para boostear!
					    </p></center>
					</div>

					<div class="col-md-4 mt-5">
						<center><i class="fab fa-cc-paypal fa-4x"></i>
						<h5 class="font-weight-bold my-4">Pago automatico</h5>
						<p class="grey-text mb-md-0 mb-5">Una vez llenes tu pozo de pago, podras retirar tu dinero de manera instantanea.
					</div>

					<div class="col-md-4 mt-5">
						<center><i class="fas fa-sort-amount-up fa-4x"></i>
						<h5 class="font-weight-bold my-4">Asciende en ISBoosting</h5>
						<p class="grey-text mb-0">Gana puntos de reputacion con tus victorias y juega por mas dinero!
						</p></center>
					</div>
						
				</div>
			</div>
		</div>	
			<!-- BOTON VER MAS -->
			<div class="col-12 mt-5 mx-0 px-0">
				<center>
					<button class="btn btn-secondary btn-lg btn-block mx-0 px-0 rounded-0" type="button" data-toggle="collapse" data-target="#masinfo" aria-expanded="false" aria-controls="masinfo">MAS INFORMACION</button>
				</center>
			</div> 
			<!-- INFO EXTRA -->
			<div class="collapse" id="masinfo">
				<strong><h2 class="mt-3">¿Como funciona?</h2><br>
				<div class="col-12 shadow bg-dark text-light">
					<p class="h5 pt-3">Una vez registrado, se te asignara una puntuacion (REPUTACION) dependiendo de tu nivel en el juego.<br><hr>
					</p>
					<p class="h5">Esta REPUTACION determinara hasta que liga podras boostear.<br><hr>
					</p>
					<p class="h5">Podras aumentar gradualmente tu reputacion ganando partidas, aumentando tu nivel maximo de boost y permitiendote aumentar tus beneficios junto con premios y logros por ganar.<br><hr></p>
					<p class="h5">En cambio, si se te acredita una derrota, perderas REPUTACION, de esta manera ajustamos el nivel de nuestros jugadores.<br><hr>
					</p>
					<p class="h5">Puedes empezar a completar un encargo simplemente dandole al boton JUGAR.<br><hr>
					</p>
					<p class="h5">Deberas descargar nuestra aplicacion de ISBoosting, y de esta manera cuando presiones el boton JUGAR la aplicacion se ejecutara y  abrira automaticamente el (launcher) de league of legends con la sesion del encargo ya iniciada, asi no tienes que ingresarla manualmente, protegiendo al usuario y facilitando el uso para los boosters.<br><hr></p>
					<p class="h5">Las partidas que jueges, se guardaran en tu historial personal y podras acceder directamente a una cuenta que hayas jugado antes.<br><hr></p>
					<p class="h5">Cada victoria se valorizara dependiendo de la liga en que se haya efectuado y se depositara en tu POZO DE DINERO, cuando llegues al minimo requerido podras retirarlo a voluntad.<br><hr></p>
					<p class="h5 pb-3">
					Eso es en escencia ISBoosting! una plataforma que te permite jugar league of legends y cobrar por ello.
					</p></strong> 
				</div>
				<!-- SUBTITULO Y BOTON REGISTRATE -->
				<div class="col-12 mt-5">
					<center><h4 class="color_h4"><strong>NO DESPERDICIES MAS TIEMPO JUGANDO GRATIS <br> UNETE A NUESTRA COMUNIDAD!</strong></h4>
					<a href="Registrate.php"><button type="button" class="btn btn-success btn-lg"><h2><center><strong></strong>REGISTRATE</center></h2></button></a></center>
				</div>
			</div>
		</div>	
	</section>

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