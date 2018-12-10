<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<title>FAQ</title>
</head>
<body>
	<!-- BARRA DE NAVEGACION CONVENCIONAL -->
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
				    <a class="nav-item nav-link active" href="FAQ.php"><strong>FAQ</strong></a>

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

	<div class="container-fluid main mt-3">
		<!-- TITULO -->
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="">PREGUNTAS FRECUENTES</h1>
			</div>
			<!-- SECCION IZQUIERDA -->
			<div class="col-12 col-md-6 mt-3">
				<!-- SECCION SEGURIDAD -->
				<div class="">
					<strong class="color_h4"><h2><i class="fas fa-shield-alt"></i> SEGURIDAD</h2></strong>
					<div class="container-fluid row">
						<div class="col-12">
							<div class="pregunta  rounded my-2 py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta1" role="button" aria-expanded="false" aria-controls="pregunta1"><center class="link">Como se que no robaran mi cuenta?</center></a>
							</div>
							<div class="collapse" id="pregunta1">
								<p>Cada cuenta está vinculada a un correo personal, sin este, no se puede modificar ningún dato de la cuenta como contraseña o mismo correo. ISBoosting jamas te pedira ese correo, por lo que es imposible que sea robada. Su cuenta está segura con nosotros, hemos hecho todo lo posible para asegurarnos que así sea y por eso nuestra página web está asegurada y protegida por una capa de encriptación segura de 256 bits.</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2 py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta2" role="button" aria-expanded="false" aria-controls="pregunta2"><center class="link">¿Y los eloboosters no compraran cosas con mi rp/ea?</center></a>
							</div>
							<div class="collapse" id="pregunta2">
								<p>No pueden, ya que nuestro programa hecho a medida, ISBoosting, bloquea la tienda del launcher de league of legends, de esta manera no pueden comprar nada sin tu permiso.</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2 py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta3" role="button" aria-expanded="false" aria-controls="pregunta3"><center class="link">¿Y no se quedaran con mi cuenta/contraseña los boosters?</center></a>
							</div>
							<div class="collapse" id="pregunta3">
							<p>No pueden, ya que nuestro programa hecho a medida, ISBoosting, iniciara el launcher de league of legends con tu cuenta logeada automaticamente cuando ellos esten dispuestos a jugar, de esta manera ningun elobooster sabra tu cuenta y contraseña</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2  py-2 b">
								<a class="h5" data-toggle="collapse" href="#pregunta4" role="button" aria-expanded="false" aria-controls="pregunta4"><center class="link">¿Usan otras medidas de seguridad?</center></a>
							</div>
							<div class="collapse" id="pregunta4">
							<p>Si, ademas los eloboosters usan VPN para evitar baneos, ademas de que trabajan bajo un codigo de conducta estricto y profesional dedicado a la seguridad de tu cuenta.</p>
							</div>
						</div>	
					</div>	
					
				</div>
				<!-- SECCION PAGOS -->
				<div class="">
					<strong class="color_h4"><h2><i class="far fa-money-bill-alt"></i> PAGOS</h2></strong>
					<div class="container-fluid row">
						<div class="col-12">
							<div class="pregunta rounded my-2 py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta5" role="button" aria-expanded="false" aria-controls="pregunta5"><center class="link">¿Que debo hacer luego de pagar?</center></a>
							</div>
							<div class="collapse" id="pregunta5">
								<p>Una vez que tu pago sea acreditado, tu cuenta se activara en nuestro sistema y estara disponible para que nuestros boosters trabajen en ella hasta la finalizacion de el encargo.</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2 py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta6" role="button" aria-expanded="false" aria-controls="pregunta6"><center class="link">¿El pago es seguro?</center></a>
							</div>
							<div class="collapse" id="pregunta6">
								<p>Todos los sistemas de pago que suamos (Paypal y PayU) son sumamente seguros y profesionales, de manera que su dinero y compra esta protegida.</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2 py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta7" role="button" aria-expanded="false" aria-controls="pregunta7"><center class="link">¿Cuales son los metodos de pago?</center></a>
							</div>
							<div class="collapse" id="pregunta7">
							<p>Contamos con diversos modos de pago dependiendo del país en que te encuentres, para más información comunicate con nuestro soporte online</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2  py-2">
								<a class="h5" data-toggle="collapse" href="#pregunta8" role="button" aria-expanded="false" aria-controls="pregunta8"><center class="link">¿Que pasa si no estoy satisfecho? ¿Puedo hacer reembolso?</center></a>
							</div>
							<div class="collapse" id="pregunta8">
							<p>No, no ofrecemos reembolsos, igualmente nosotros siempre terminaremos tu encargo. En caso de que no sea posible terminarlo, te reembolsaremos la parte faltante del encargo</p>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- SECCION DERECHA -->
			<div class="col-12 col-md-6 mt-3">
				<!-- SECCION SERVICIOS -->
				<div class="">
					<strong class="color_h4"><h2><i class="fas fa-shopping-cart"></i> SOBRE LOS SERVICIOS</h2></strong>
					<div class="col-12">
							<div class="pregunta rounded my-2 py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta9" role="button" aria-expanded="false" aria-controls="pregunta9"><center class="link">¿Solo un booster jugara en mi cuenta?</center></a>
							</div>
							<div class="collapse" id="pregunta9">
								<p>No, diversos boosters trabajaran en tu cuenta, pero todos funcionan bajo la misma norma de conducta y te aseguramos la calidad del trabajo de estos.</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2 py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta10" role="button" aria-expanded="false" aria-controls="pregunta10"><center class="link">¿Puedo espectear las partidas mientras me boostean?</center></a>
							</div>
							<div class="collapse" id="pregunta10">
								<p>Si, por supuesto! Podes hacerlo desde alguna página que se lo permita o desde alguna cuenta secundaria o algún amigo</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2 py-2" >
								<a class="h5" data-toggle="collapse" href="#pregunta11" role="button" aria-expanded="false" aria-controls="pregunta11"><center class="link">¿Que pasa si los boosters no estan haciendo un trabajo de mi agrado?</center></a>
							</div>
							<div class="collapse" id="pregunta11">
							<p>Ponte en contacto con nosotros y lo solucionaremos de inmediato.</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2  py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta12" role="button" aria-expanded="false" aria-controls="pregunta12"><center class="link">¿Que pasa si un booster fue reportado y por ese motivo me banearon la cuenta?</center></a>
							</div>
							<div class="collapse" id="pregunta12">
							<p>Tenemos reglas estrictas sobre el comportamiento en las partidas. Nuestros boosters jamás tendrá un comportamiento tóxico dentro de la partida.</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2  py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta15" role="button" aria-expanded="false" aria-controls="pregunta15"><center class="link">¿Puedo jugar en mi cuenta durante el proceso de boosteo?</center></a>
							</div>
							<div class="collapse" id="pregunta15">
							<p>Si en el caso de comprar divisiones, tendras la opcion de establecer un horario libre de boosters, asi podras jugar SOLO PARTIDAS NORMALES, si juegas partidas clasificatorias inflinjiras nuestro contrato y deberemos cancelar el encargo.</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2  py-2 ">
								<a class="h5" data-toggle="collapse" href="#pregunta13" role="button" aria-expanded="false" aria-controls="pregunta13"><center class="link">¿El booster se salteo una division por la cual no pague, debo pagar por esto?</center></a>
							</div>
							<div class="collapse" id="pregunta13">
							<p>No, queremos que disfrute tu encargo al maximo, y en caso de que esto ocurra, GGWP</p>
							</div>
						</div>
						<div class="col-12">
							
							<div class="pregunta rounded my-2  py-2">
								<a class="h5" data-toggle="collapse" href="#pregunta14" role="button" aria-expanded="false" aria-controls="pregunta14"><center class="link">Por cada victoria me dan menos de 15 LP ¿Puedo comprar divisiones?</center></a>
							</div>
							<div class="collapse" id="pregunta14">
							<p>No, en caso de que compres divisiones y esto pase transformaremos cada victoria en "COMPRAR VICTORIAS" hasta que superes esta cifra</p>
							</div>
						</div>
				</div>
			</div>
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