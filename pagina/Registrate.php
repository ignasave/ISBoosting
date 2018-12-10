<!--ESTE ES EL REGISTRATE PARA LOS ELOBOOSTERS -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrate</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
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
					<a href="IniciaSesion.php" class="btn btn-primary" >Inicia Sesion</a>
					
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
					<a href="IniciaSesion.php"><button class="btn btn-info">Cerrar Sesion</button></a>
					<?php } ?>			 
				</div>
		   </div>
		</nav>
	</header>

	<div class="container main-container mt-3">
		<div class="row justify-content-center contenedor shadow ">
			<!-- TITULO -->
			<div class="col-12 mt-3 container-formulario">
				<h1>Registrate</h1>
			</div>
			<!-- FORMULARIO -->
			<div class="col-12 mt-3 container-formulario">
				<form action="../partials/Procesar_registro.php" id="form" method="post">
					<div class="row">
						<div class="alert alert-danger col-12 rounded-0" id="error">
									<center><p></p></center>
						</div>
						<!-- LADO IZQUIERDO -->
						<div class="col-12 col-md-6">

							<div class="form-group">
								<label for="usuario" class="form-control-label"><strong>Usuario</strong></label>
                    			<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese su nombre de usuario" onkeyup="validacion('usuario')">
                    			<span class=""></span>
							</div>

							<div class="form-group">
								<label for="email" class="form-control-label"><strong>Email</strong></label>
                    			<input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su Email" onkeyup="validacion('email')">
                    			<span></span>
							</div>

							<div class="form-group">
								<label for="R_email" class="form-control-label"><strong>Repita su direccion de Email</strong></label>
                    			<input type="email" id="email2" class="form-control" name="R_email" placeholder="Ingrese su Email" onkeyup="validacion('email2')">
                    			<span></span>
							</div>

							<div class="form-group">
	                		    <label for="password" class="form-control-label"><strong>Contraseña</strong></label>
	               	    		<input type="password" id="password" class="form-control" name="password" placeholder="Ingrese su contraseña" onkeyup="validacion('password')">
	               	    		 <span></span>
                			</div>

                			<div class="form-group">
								<label for="nickname" class="form-control-label"><strong>Nickname de booster</strong></label>
                    			<input type="text" id="nickname" class="form-control" name="nickname" placeholder="Ingrese su nickname para la plataforma" onkeyup="validacion('nickname')">
                    			<span class=""></span>
							</div>
						</div>
						<!-- LADO DERECHO -->
						<div class="col-12 col-md-6">

							<div class="form-group">
								<label for="invocador" class="form-control-label"><strong>Nombre de invocador</strong></label>
                    			<input type="text" id="invocador" class="form-control" name="invocador" placeholder="Ingrese su nombre de invocador" onkeyup="validacion('invocador')">
                    			<span></span>
							</div>

							<div class="row">
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label for="liga" class="form-control-label"><strong>Liga de invocador</strong></label>
		                    			<select class="form-control" name="liga" id="liga" onchange="bloqueoPro(this)">
									      <option value="oro">Oro</option>
									      <option value="platino">Platino</option>
									      <option value="diamante">Diamante</option>
									      <option value="maestro">Maestro</option>
									      <option value="retador">Retador</option>
									    </select>
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label for="division" class="form-control-label"><strong>Division</strong></label>
		                    			<select class="form-control" name="division" id="division">
									      <option>V</option>
									      <option>IV</option>
									      <option>III</option>
									      <option>II</option>
									      <option>I</option>
									    </select>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="nombre" class="form-control-label"><strong>Nombre</strong></label>
                    			<input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingrese su nombre"  onkeyup="validacion('nombre')">
                    			<span></span>
							</div>

							<div class="form-group">
								<label for="apellido"class="form-control-label"><strong>Apellido</strong></label>
                    			<input type="text" id="apellido" class="form-control" name="apellido"  placeholder="Ingrese su apellido" onkeyup="validacion('apellido')">
                    			<span></span>
							</div>

							<div class="form-group">
								<label for="deposito" class="form-control-label"><strong>Cuenta de deposito</strong></label>
                    			<input type="text" id="deposito" class="form-control" name="deposito" placeholder="Ingrese la cuenta de deposito" onkeyup="validacion('deposito')">
								<span></span>
							</div>

							<div class="form-group">
                    			<input type="button" id="btnvalidar" class="btn btn-success btn-lg" value="REGISTRATE" onclick="verificar()">
               	 			</div>
						</div>

					</div>		
				</form>
			</div>

		</div>	
	</div>
	
	<footer class="font-small pie pb-5 mt-3 row ">
		<!-- Copyright -->  
		<div class="col">
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
	    		<a href="index.php"> ISBoosting.com</a>
	  		</div>
		</div>  
	</footer>

	<!-- CODIGO JS -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/Registrate.js"></script>
</body>
</html>