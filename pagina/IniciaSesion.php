
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicia sesion</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- SCRIPT DE VALIDACION -->
	<script src="js/IniciaSesion.js"></script>
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
				    <a class="nav-item nav-link mr-2" href="index.php"><strong>INICIO</strong></a>
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
					<a href="IniciaSesion.php" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Inicia Sesion</a>

					<!-- PHP - ELSE BOTONES SESION INICIADA -->
					<?php }else{?>
					<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Perfil</button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="#">Mi perfil</a>
					    <a class="dropdown-item" href="#">Opciones</a>
					    <a class="dropdown-item" href="#"></a>
					  </div>
					</div>
					<a href="partials/Cerrar_Sesion.php"><button class="btn btn-info">Cerrar Sesion</button></a>
					<?php } ?> 			 
				</div>
		   </div>
		</nav>
	</header>

	<div class="container mt-3">
				<!-- FORMULARIO -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-6 mt-2 contenedor shadow ">
						<!-- TITULO -->
						<h1>Inicia Sesion</h1>
						<!-- FORMULARIO -->
						<form id="form" action="partials/Procesar_Login.php" method="POST">

								<div class="alert alert-danger p-0 pt-1 mb-3" id="error">
									<center><p></p></center>
								</div>

								<div class="form-group">
									<label for="usuario"><strong>Usuario</strong></label>
									<input type="text" class="form-control max" placeholder="Usuario" name="usuario" id="usuario" onkeyup="validacion('usuario')">
									<span></span>
								</div>

								<div class="form-group ">
									<label for="password"><strong>Contraseña</strong></label>
									<input type="password" class="form-control max" placeholder="Contraseña" name="password" id="password" onkeyup="validacion('password')">
									<span></span>
								</div>

								<div class="form-group row">
									<div class="col mt-3  form-group-btn">
					                	<input type="button" class="btn btn-success btn-lg" value="Inicia Sesion" onclick="verificar()">
					            	</div>

					            	<div class="clearfix"></div>

					            	<div class="col mt-3 ml-3 custom-control custom-checkbox">
									    <input type="checkbox" class="custom-control-input" id="recuerdame" name="example1">
									    <label class="custom-control-label" for="recuerdame">Recuerdame</label>
									</div>
								</div>

									<label><strong class="color_h4"><h4>OLVIDO SU CONTRASEÑA?</h4>Haga click <a href="#">aqui</a></strong></label>
						</form> 
					</div>
				</div>
	</div>

	<!-- FOOTER -->
	<footer class="font-small pie pb-5 mt-3 row ">
		<!-- Copyright -->  
		<div class="col">
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
	    		<a href="index.html"> ISBoosting.com</a>
	  		</div>
		</div>
	</footer>
	

</body>
</html>