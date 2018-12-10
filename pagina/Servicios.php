<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<title>Servicios</title>
</head>
<body>
	<!-- HEADER COMUN -->
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
				    <a class="nav-item nav-link active mr-2" href="Servicios.php"><strong>SERVICIOS</strong></a>
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
					<a href="#"><button class="btn btn-info">Cerrar Sesion</button></a>
					<?php } ?>			 
				</div>
		   </div>
		</nav>
	</header>
	<!-- BARRA DE NAVEGACION SECUNDARIA -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 bg-dark">
				<ul class="nav nav-tabs nav-justified" role="tablist">
				    <li class="nav-item barra-serv">
				      <a class="nav-link active " data-toggle="tab" href="#divisones"><strong><h5>Divisiones</h5></strong></a>
				    </li>
				    <li class="nav-item barra-serv">
				      <a class="nav-link " data-toggle="tab" href="#primeras10"><strong><h5 >Primeras 10</h5></strong></a>
				    </li>
				    <li class="nav-item barra-serv">
				      <a class="nav-link " data-toggle="tab" href="#victorias"><strong><h5>Victorias</h5></strong></a>
				    </li>
				  </ul>
			</div>
		</div>
	</div>
	<!-- CONTENIDO  -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="tab-content">
					<!-- DIVISIONES -->
				    <div id="divisones" class="container tab-pane active"><br>
						<div class="row justify-content-center">
							<!-- TITULO -->
							<div class="col-12 pb-1">
								<center><h3><strong class="color_h4">DIVISIONES</strong></h3></center>	 
							</div>

							<div class="col-12">
								<form class="row">
									<!-- DIVISION ACTUAL -->
									<div class="col-12 col-md mt-3 mr-2 pt-2 contenedor shadow">
										<center><h4>DIVISION ACTUAL</h4></center><hr class="hr-2">	
										<div class="row">
											<div class="col-12 mb-2">
												<center><img src="files/images/img1.jpg" id="imgLigaA" height="100px"></center>
											</div>
											<div class="col">
												<div class="form-group">
					                    			<select class="form-control" name="ligaA" id="ligaA" onchange="cambiaLigaA(this)">
					                    			  <option value="bronce">BRONCE</option>
												      <option value="plata">PLATA</option>
												      <option value="oro">ORO</option>
												      <option value="platino">PLATINO</option>
												    </select>
												</div>
											</div>
											<div class="col">
												<div class="form-group">
													<select class="form-control" name="divisionA" id="divisionA">
												      <option id="V_A">V</option>
												      <option id="IV_A">IV</option>
												      <option id="III_A">III</option>
												      <option id="II_A">II</option>
												      <option id="I_A">I</option>
												    </select>
												</div>
											</div>
										</div>
									</div>
									<!-- DIVISION OBJETIVO -->
									<div class="col-12 col-md  mt-3 pt-2 contenedor shadow ">
										<center><h4>DIVISION OBJETIVO</h4></center><hr class="hr-2">
										<div class="row">
											<div class="col-12 mb-2">
												<center><img src="files/images/img1.jpg" id="imgLigaO" height="100px"></center>
											</div>
											<div class="col">
												<div class="form-group">
					                    			<select class="form-control" name="ligaO" id="ligaO" onchange="disableDiamond(this),cambiaLigaO(this)">
					                    			  <option value="bronce">BRONCE</option>
												      <option value="plata">PLATA</option>
												      <option value="oro">ORO</option>
												      <option value="platino">PLATINO</option>
												      <option value="diamante">DIAMANTE</option>
												    </select>
												</div>
											</div>
											<div class="col">
												<div class="form-group">
													<select class="form-control" name="divisionO" id="divisionO">
												      <option id="V_O">V</option>
												      <option id="IV_O">IV</option>
												      <option id="III_O">III</option>
												      <option id="II_O">II</option>
												      <option id="I_O">I</option>
												    </select>
												</div>
											</div>
										</div>
									</div>

									<div class="w-100 my-0" id="posError1"></div>
									
									<!-- SERVIDOR -->
									<div class="col-12 col-md mr-2 mt-3 pt-2 contenedor shadow ">
										<center><h4>SERVIDOR</h4></center><hr class="hr-2">										<div class="row">
											<div class="col-12 mb-2">
												<center><img src="files/images/img1.jpg" id="imgServer1" height="100px"></center>
											</div>
											<div class="col">
												<div class="form-group">
												<select class="form-control" name="servidor" id="servidor" onchange="cambiaServerD(this)">
											 	    <option value="LAS">LAS</option>
													<option value="LAN">LAN</option>
													<option value="BR">BR</option>
													<option value="EUNE">EUNE</option>
													<option value="EUW">EUW</option>
													<option value="NA">NA</option>
												</select>
												</div>
											</div>
											
										</div>
										
									</div>
									<!-- COLA -->
									<div class="col-12 col-md mt-3 pt-2 contenedor shadow ">
										<center><h4>COLA</h4></center><hr class="hr-2">
										<div class="row">
											<div class="col-12 mb-3">
												<center><img src="files/images/img1.jpg" id="imgCola1" height="100px"></center>
											</div>
											<div class="col">
												<center>
													<div class="custom-control custom-radio custom-control-inline">
													  <input type="radio" id="soloq" name="cola" class="custom-control-input" onchange="cambiaCola(this)" value="soloq" checked>
													  <label class="custom-control-label" for="soloq">SOLOQ</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
													  <input type="radio" id="flex" onchange="cambiaCola(this)" name="cola" value="flex" class="custom-control-input">
													  <label class="custom-control-label" for="flex">FLEX</label>
													</div>
												</center>
											</div>
										</div>
												
									</div>

									<div class="w-100"></div>
									<!-- FLASH -->
									<div class="col-12 col-md mr-2 mt-3 pt-2 contenedor shadow ">
										<center><h4>FLASH<a tabindex="0" class="btn " role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Flash" data-content="Establece la posicion en la que usas normalmente el destello, asi evitamos sospechas y aseguramos tu cuenta."><i class="fas fa-question-circle fa-lg"></i></a>
											<script>
												$(function () {
										 	 		$('[data-toggle="popover"]').popover()
												})
											</script></h4></center><hr class="hr-2">
										<center>
											<div class="custom-control custom-radio custom-control-inline">
											  <input type="radio" id="d" name="flash" class="custom-control-input" checked>
											  <label class="custom-control-label" for="d">D</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
											  <input type="radio" id="f" name="flash" class="custom-control-input">
											  <label class="custom-control-label" for="f">F</label>
											</div>
										</center>		
									</div>
									<!-- HORARIO LIBRE -->
									<div class="col-12 col-md mt-3 pt-2 contenedor shadow ">
										<center><h4>HORARIO LIBRE<a tabindex="0" class="btn " role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Horarios libres" data-content="Establece la hora en que los boosters no entraran a tu cuenta para que puedas jugar en ella - MAXIMO 3 HS."><i class="fas fa-question-circle fa-lg"></i></a>
											<script>
												$(function () {
										 	 		$('[data-toggle="popover"]').popover()
												})
											</script></h4></center><hr class="hr-2">
										
										<div class="row">
											<div class="col">
												<div class="form-group">
													<select class="form-control" id="horainicio" name="horainicio">
														<option value="1">01:00</option>
														<option value="2">02:00</option>
														<option value="3">03:00</option>
														<option value="4">04:00</option>
														<option value="5">05:00</option>
														<option value="6">06:00</option>
														<option value="7">07:00</option>
														<option value="8">08:00</option>
														<option value="9">09:00</option>
														<option value="10">10:00</option>
														<option value="11">11:00</option>
														<option value="12">12:00</option>
														<option value="13">13:00</option>
														<option value="14">14:00</option>
														<option value="15">15:00</option>
														<option value="16">16:00</option>
														<option value="17">17:00</option>
														<option value="18">18:00</option>
														<option value="19">19:00</option>
														<option value="20">20:00</option>
														<option value="21">21:00</option>
														<option value="22">22:00</option>
														<option value="23">23:00</option>
														<option value="24">24:00</option>
													</select>
												</div>
											</div>
											<div class="col">
												<div class="form-group">
													<select class="form-control" id="horafinal" name="horafinal">
														<option value="1">01:00</option>
														<option value="2">02:00</option>
														<option value="3">03:00</option>
														<option value="4">04:00</option>
														<option value="5">05:00</option>
														<option value="6">06:00</option>
														<option value="7">07:00</option>
														<option value="8">08:00</option>
														<option value="9">09:00</option>
														<option value="10">10:00</option>
														<option value="11">11:00</option>
														<option value="12">12:00</option>
														<option value="13">13:00</option>
														<option value="14">14:00</option>
														<option value="15">15:00</option>
														<option value="16">16:00</option>
														<option value="17">17:00</option>
														<option value="18">18:00</option>
														<option value="19">19:00</option>
														<option value="20">20:00</option>
														<option value="21">21:00</option>
														<option value="22">22:00</option>
														<option value="23">23:00</option>
														<option value="24">24:00</option>
													</select>
												</div>
											</div>
										</div>
									</div>

									<div class="w-100"></div>
									<!-- ALERTA -->
									<div class="col-12 mt-3 mb-0 alert alert-danger" role="alert" id="alerta_horario">
										  Recuerda que si ganas 12 PL o menos, transformaremos tu encargo en victorias individuales hasta que sea necesario.
									</div>

									<!-- CONTRATAR -->
									<div class="col-12 col-md mt-3 pt-2 contenedor shadow ">
										<center><h4>TOTAL</h4></center>
										<label><strong>PRECIO<p class="precio" id="precio"></p></strong></label>
										<br>
										<label><strong>TIEMPO ESTIMADO<p class="eta" id="eta"></p></strong></label>

										<div class="form-group">
                    						<button type="button" id="contratar1" class="btn btn-success btn-lg btn-block" value="" onclick="validarDivisiones()" name="contratar">Contratar</button>
										</div>
									</div>
								</form>	
							</div>	
						</div>
				    </div>
					<!-- PRIMERAS 10 -->
				    <div id="primeras10" class="container tab-pane fade"><br>
				    	<div class="row justify-content-center">
							<div class="col-12 pb-1">
								<center><h3><strong class="color_h4">PRIMERAS 10</strong></h3></center>	 
							</div>
							<!-- LIGA ANTERIOR -->
							<div class="col-12">
								<form class="row">
									<div class="col-12 col-md mt-3 mr-2 pt-2 contenedor shadow ">
										    <center><h4>LIGA ANTERIOR</h4></center><hr class="hr-2">	
											<div class="form-group">
					                    		<select class="form-control" name="liga" id="liga">
					                    		  <option>UNRAKED</option>
					                    		  <option>BRONCE</option>
											      <option>PLATA</option>
											      <option>ORO</option>
											      <option>PLATINO</option>
											      <option>DIAMANTE</option>
											    </select>
											</div>
									</div>
									<!-- VICTORIAS -->
									<div class="col-12 col-md  mt-3 pt-2 contenedor shadow ">
										<center><h4>VICTORIAS</h4></center><hr class="hr-2">
										<input type="range" class="custom-range" min="0" max="10" id="contadorV">
										<center><label class="color_h4 h4" for="contadorV" id="contador"></label></center>
										<script>
											var slider = document.getElementById("contadorV");
											var output = document.getElementById("contador");
											output.innerHTML = slider.value;

											slider.oninput = function() {
											  output.innerHTML = this.value;
											}
										</script>
									</div>

									<div class="w-100"></div>
									<!-- SERVIDOR -->
									<div class="col-12 col-md mr-2 mt-3 pt-2 contenedor shadow ">
										<center><h4>SERVIDOR</h4></center><hr class="hr-2">
										<div class="row">
											<div class="col-12 my-2">
												<center><img src="files/images/img1.jpg" id="imgServer2" height="100px"></center>
											</div>
											<div class="col">
												<div class="form-group">
												<select class="form-control" name="servidor2" id="servidor2" onchange="cambiaServerP(this)">
											 	    <option value="LAS">LAS</option>
													<option value="LAN">LAN</option>
													<option value="BR">BR</option>
													<option value="EUNE">EUNE</option>
													<option value="EUW">EUW</option>
													<option value="NA">NA</option>
												</select>
												</div>
											</div>
											
										</div>
									</div>
									<!-- COLA -->
									<div class="col-12 col-md mt-3 pt-2 contenedor shadow ">
										<center><h4>COLA</h4></center><hr class="hr-2">
										<div class="row">
											<div class="col-12 my-2 mb-3">
												<center><img src="files/images/img1.jpg" id="imgCola2" height="100px"></center>
											</div>
											<div class="col">
												<center>
													<div class="custom-control custom-radio custom-control-inline">
													  <input type="radio" id="soloq2" name="cola2" class="custom-control-input" onchange="cambiaCola2(this)" value="soloq" checked>
													  <label class="custom-control-label" for="soloq2">SOLOQ</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
													  <input type="radio" id="flex2" onchange="cambiaCola2(this)" name="cola2" value="flex" class="custom-control-input">
													  <label class="custom-control-label" for="flex2">FLEX</label>
													</div>
												</center>
											</div>
										</div>		
									</div>

									<div class="w-100"></div>
									<!-- FLASH -->
									<div class="col-12 col-md mr-2 mt-3 pt-2 contenedor shadow ">
										<center><h4>FLASH<a tabindex="0" class="btn " role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Flash" data-content="Establece la posicion en la que usas normalmente el destello, asi evitamos sospechas y aseguramos tu cuenta."><i class="fas fa-question-circle fa-lg"></i></a>
											<script>
												$(function () {
										 	 		$('[data-toggle="popover"]').popover()
												})
											</script></h4></center><hr class="hr-2">
										<center>
											<div class="custom-control custom-radio custom-control-inline">
											  <input type="radio" id="d2" name="flash2" class="custom-control-input" checked>
											  <label class="custom-control-label" for="d2">D</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
											  <input type="radio" id="f2" name="flash2" class="custom-control-input">
											  <label class="custom-control-label" for="f2">F</label>
											</div>
										</center>		
									</div>
									<!-- CONTENEDOR VACIO -->
									<div class="col-12 col-md mt-3 pt-2 contenedor shadow ">
											
									</div>

									<div class="w-100"></div>
									<!-- TOTAL -->
									<div class="col-12 col-md mt-3 pt-2 contenedor shadow ">
										<center><h4>TOTAL</h4></center>
										<label><strong>PRECIO<p class="precio" id="precio"></p></strong></label>
										<br>
										<label><strong>TIEMPO ESTIMADO<p class="eta" id="eta"></p></strong></label>

										<div class="form-group">
                    						<button type="button" class="btn btn-success btn-lg btn-block" value="" onclick="" name="contratar">Contratar</button>
										</div>
									</div>
								</form>	
							</div>	
						</div>
				    </div>
					<!-- VICTORIAS -->
				    <div id="victorias" class="container tab-pane fade"><br>
				    	<div class="row justify-content-center">
				    		<!-- TITULO -->
							<div class="col-12 pb-1">
								<center><h3><strong class="color_h4">VICTORIAS</strong></h3></center>	 
							</div>
							<!-- LIGA ANTERIOR -->
							<div class="col-12">
								<form class="row">
									<div class="col-12 col-md mt-3 mr-2 pt-2 contenedor shadow ">
										    <center><h4>LIGA ANTERIOR</h4></center><hr class="hr-2">	
											<div class="form-group">
					                    		<select class="form-control" name="liga" id="liga">
					                    		  <option>UNRAKED</option>
					                    		  <option>BRONCE</option>
											      <option>PLATA</option>
											      <option>ORO</option>
											      <option>PLATINO</option>
											      <option>DIAMANTE</option>
											    </select>
											</div>
									</div>
									<!-- VICTORIAS -->
									<div class="col-12 col-md  mt-3 pt-2 contenedor shadow ">
										<center><h4>VICTORIAS</h4></center><hr class="hr-2">
										<input type="range" class="custom-range" min="0" max="20" id="contadorV2">
										<center><label class="color_h4 h4" for="contadorV2" id="contador2"></label></center>
										<script>
											var slider2 = document.getElementById("contadorV2");
											var output2 = document.getElementById("contador2");
											output2.innerHTML = slider2.value;

											slider2.oninput = function() {
											  output2.innerHTML = this.value;
											}
										</script>
									</div>

									<div class="w-100"></div>
									<!-- SERVIDOR -->
									<div class="col-12 col-md mr-2 mt-3 pt-2 contenedor shadow ">
										<center><h4>SERVIDOR</h4></center><hr class="hr-2">
										<div class="row">
											<div class="col-12 my-2">
												<center><img src="files/images/img1.jpg" id="imgServer3" height="100px"></center>
											</div>
											<div class="col">
												<div class="form-group">
												<select class="form-control" name="servidor3" id="servidor3" onchange="cambiaServerV(this)">
											 	    <option value="LAS">LAS</option>
													<option value="LAN">LAN</option>
													<option value="BR">BR</option>
													<option value="EUNE">EUNE</option>
													<option value="EUW">EUW</option>
													<option value="NA">NA</option>
												</select>
												</div>
											</div>
											
										</div>
									</div>
									<!-- COLA -->
									<div class="col-12 col-md mt-3 pt-2 contenedor shadow ">
										<center><h4>COLA</h4></center><hr class="hr-2">
										<div class="row">
											<div class="col-12 my-2 mb-3">
												<center><img src="files/images/img1.jpg" id="imgCola3" height="100px"></center>
											</div>
											<div class="col">
												<center>
													<div class="custom-control custom-radio custom-control-inline">
													  <input type="radio" id="soloq3" name="cola3" class="custom-control-input" onchange="cambiaCola3(this)" value="soloq" checked>
													  <label class="custom-control-label" for="soloq3">SOLOQ</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
													  <input type="radio" id="flex3" onchange="cambiaCola3(this)" name="cola3" value="flex" class="custom-control-input">
													  <label class="custom-control-label" for="flex3">FLEX</label>
													</div>
												</center>
											</div>
										</div>		
									</div>

									<div class="w-100"></div>
									<!-- FLASH -->
									<div class="col-12 col-md mr-2 mt-3 pt-2 contenedor shadow ">
										<center><h4>FLASH<a tabindex="0" class="btn " role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Flash" data-content="Establece la posicion en la que usas normalmente el destello, asi evitamos sospechas y aseguramos tu cuenta."><i class="fas fa-question-circle fa-lg"></i></a>
											<script>
												$(function () {
										 	 		$('[data-toggle="popover"]').popover()
												})
											</script></h4></center><hr class="hr-2">
										<center>
											<div class="custom-control custom-radio custom-control-inline">
											  <input type="radio" id="d3" name="flash3" class="custom-control-input" checked>
											  <label class="custom-control-label" for="d3">D</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
											  <input type="radio" id="f3" name="flash3" class="custom-control-input">
											  <label class="custom-control-label" for="f3">F</label>
											</div>
										</center>		
									</div>
									<!-- CONTENEDOR VACIO -->
									<div class="col-12 col-md mt-3 pt-2 contenedor shadow ">
											
									</div>

									<div class="w-100"></div>
									<!-- TOTAL -->
									<div class="col-12 col-md mt-3 pt-2 contenedor shadow ">
										
										<center><h4>TOTAL</h4></center>
										<label><strong>PRECIO<p class="precio" id="precio"></p></strong></label>
										<br>
										<label><strong>TIEMPO ESTIMADO<p class="eta" id="eta"></p></strong></label>

										<div class="form-group">
                    						<button type="button" class="btn btn-success btn-lg btn-block" name="contratar" onclick="">Contratar</button>
										</div>
									</div>
								</form>	
							</div>	
						</div>
				    </div>

				  </div>
			</div>
				  
		</div>
	</div>	


	<!-- Footer -->
	<footer class="font-small pie mt-3 row ">
		<!-- Copyright -->  
		<div class="col">
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
	    		<a href="index.html"> ISBoosting.com</a>
	  		</div>
		</div>  
	</footer>
	
	<!-- Incluyendo js -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/Servicios.js"></script>
</body>
</html>
	