<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<!-- BARRA DE NAVEGACION NORMAL -->
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
				    <a class="nav-item nav-link mr-2" href="SeBooster.php"><strong>SE ELOBOOSTER</strong></a>
				    <a class="nav-item nav-link active mr-2" href="Contacto.php"><strong>CONTACTO</strong></a>
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
	
	<!-- MAIN -->
	<section class=" container">
		<div class="row">
			<!-- TITULO -->
			<div class="col-12 mt-3 ">
				<h1>Contactanos</h1>
			</div>
			<!-- SUBTITULO -->
			<div class="col-12 col-md-6 mt-3 ">
				<h4><strong class="color_h4">POR CUALQUIER PREGUNTA QUE TENGAS CONSULTANOS POR AQUÍ, TE RESPONDEREMOS DENTRO DE LAS 12 HORAS.</strong></h4>
			</div>
			<!-- FORMULARIO -->
			<div class="col-12 pt-2 col-md-6 contenedor shadow">
				<form>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="email"><strong>Email</strong></label>
   								<input type="email" class="form-control" id="email" placeholder="Ingresa tu email" onkeyup="validacion('email');">
   								<span></span>
							</div>

							<div class="form-group">
								<label for="nombre"><strong>Nombre</strong></label>
   								<input type="nombre" class="form-control" id="nombre" placeholder="Ingresa tu nombre" onkeyup="validacion('nombre');">
   								<span></span>
							</div>

							<div class="form-group">
								<label for="asunto"><strong>Asunto</strong></label>
   								<input type="asunto" class="form-control" id="asunto" placeholder="Ingresa el asunto" onkeyup="validacion('asunto');">
   								<span></span>
							</div>

							<div class="form-group">
								<label for="mensaje"><strong>Mensaje</strong></label>
								<textarea class="form-control" id="mensaje" rows="3" onkeyup="validacion('mensaje');"></textarea>
								<span></span>
							</div>

							<div class="form-group">
                    			<input type="button" class="btn btn-success btn-lg" name="submit" value="ENVIAR" onclick='verificar();'>
               	 			</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section> 

	<!-- Footer -->
	<footer class="font-small pb-5 pie mt-3 row fixed-bottom">
		<!-- Copyright -->  
		<div class="col">
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
	    		<a href="index.html"> ISBoosting.com</a>
	  		</div>
		</div>  
	</footer>
	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- SCRIPT DE VERIFICACION -->
	<script src="js/Contacto.js"></script>
</body>
</html>