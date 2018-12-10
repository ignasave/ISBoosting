

	$(document).ready(function(){
		$("span").hide();
		$('#error').hide();
	});
	// FUNCION QUE BLOQUEA DIVISIONES EN MASTER Y CHALLENGER
	function bloqueoPro(x){
			var div = document.getElementById("division")
			if (x.value === "oro" || x.value === "platino" || x.value === "diamante") {
				$(div).removeAttr("disabled");
			}
			else if (x.value === "maestro" || x.value ==="retador") {
				$(div).prop("disabled", true);
			}
	}

	// FUNCION VERIFICAR, LLAMA A TODAS LAS FUNCIONES VALIDACION DEL FORMULARIO
	function verificar(){
				var v1=0,v2=0,v3=0,v4=0,v5=0,v6=0,v7=0,v8=0,v9=0;
				v1=validacion('usuario');
	            v2=validacion('email');
	            v3=validacion('email2');
	            v4=validacion('password');
	            v5=validacion('nickname');
	            v6=validacion('invocador');
	            v7=validacion('nombre');
	            v8=validacion('apellido');
	            v9=validacion('deposito');
	            
	            if (v1===false || v2===false || v3===false || v4===false || v5===false || v6===false || v7===false || v8===false || v9===false ) {
	            	console.log("No submit");
	            }
	            else
	            {
	            	//console.log("submit");
	            	var datos = { 
	            		'usuario' : $("#usuario").val(),
	            		'email' : $("#email").val(),
	            		'password' : $("#password").val(),
	            		'nickname' : $("#nickname").val(),
	            		'invocador' : $("#invocador").val(),
	            		'email' : $("#email").val(),
	            		'liga' : $("#liga").val(),
	            		'division' : $("#division").val(),
	            		'nombre' : $("#nombre").val(),
	            		'apellido' : $("#apellido").val(),
	            		'deposito' : $("#deposito").val()

	            	};
	            	$.ajax({
	            		url: 'partials/Procesar_registro.php',
	            		type: 'POST',
	            		dataType: 'json',
	            		data: datos,
	            		
	            		timeout : function (){
	            			$('#error').show();
	            			$("#error").children().children().html('Error: Se agoto el tiempo de respuesta del servidor!');
	            		},

	            		success : function (response) {
	            			//console.log(response);
                        	if(response == 'funciono'){
                        		alert('USUARIO REGISTRADO');
                        		location.replace("http://localhost/pagina/index.php");
                        		$('#error').hide();
                        	}
                        	else if (response.length > 0) {
								$('#error').show();
								var mensaje = 'Los siguientes campos estan en uso : ';
								var coma = ', ';
								for (var i = response.length - 1; i >= 0; i--) {
									if (response[i] != undefined ) { mensaje = mensaje.concat(response[i] , coma)}
								}
								mensaje = mensaje.slice(0, -2);
                        		$("#error").children().children().html(mensaje);
                        	}
                        	else{
                        		$('#error').show();
                				$("#error").children().children().html('Error: hubo un error en el servidor, intente nuevamente');
                        	}
                        	
                		},

                		error : function(response){
                			$('#error').show();
                			$("#error").children().children().html('Error: hubo un error en el servidor, intente nuevamente');
                		}
                	});
	            }
	}
	// FUNCION VALIDACION, DEPENDE DEL CAMPO A VALIDAR MODIFICA SU ESTILO PARA DAR A ENTENDER SI ES VALIDO O NO
	function validacion(campo){
				if (campo === 'usuario') {
					var valorUsuario = document.getElementById("usuario").value;
					if( valorUsuario == null || valorUsuario.length == 0 || /^\s+$/.test(valorUsuario) ) {
						$("#usuario").attr("class","form-control is-invalid");
						$("#usuario").parent().children("span").attr("class","invalid-feedback");
						$("#usuario").parent().children("span").text("Debe ingresar algun caracter").show();
						return false;
					}
					else {
						if (valorUsuario.length > 25) {
							$("#usuario").attr("class","form-control is-invalid");
							$("#usuario").parent().children("span").attr("class","invalid-feedback");
							$("#usuario").parent().children("span").text("Maximo 25 caracteres").show();
							return false;
						}
						else{
							$("#usuario").attr("class","form-control is-valid");
							$("#usuario").parent().children("span").text("").hide();
							return true;
						}	
					}
				}

				if (campo === 'email') {
					var valorEmail = document.getElementById("email").value;
					if( valorEmail == null || valorEmail.length == 0 || /^\s+$/.test(valorEmail) ) {
						$("#email").attr("class","form-control is-invalid");
						$("#email").parent().children("span").attr("class","invalid-feedback");
						$("#email").parent().children("span").text("Debe ingresar algun caracter").show();
						return false;
					}
					else {
						var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
						 if (!regex.test(valorEmail.trim())) {
							$("#email").attr("class","form-control is-invalid");
							$("#email").parent().children("span").attr("class","invalid-feedback");
							$("#email").parent().children("span").text("Debe ingresar un Email valido").show();
						  	return false;
						}

						else {
							if (valorEmail.length > 100) {
								$("#email").attr("class","form-control is-invalid");
								$("#email").parent().children("span").attr("class","invalid-feedback");
								$("#email").parent().children("span").text("Maximo 100 caracteres").show();
							  	return false;
							}
							else{
								$("#email").attr("class","form-control is-valid");
								$("#email").parent().children("span").text("").hide();
								return true;
							}
						}
					}
				}

				if (campo === 'email2') {
					var valorEmail2 = document.getElementById("email2").value;
					if( valorEmail2 == null || valorEmail2.length == 0 || /^\s+$/.test(valorEmail2) ) {
						$("#email2").attr("class","form-control is-invalid");
						$("#email2").parent().children("span").attr("class","invalid-feedback");
						$("#email2").parent().children("span").text("Debe ingresar algun caracter").show();
						return false;
					}
					else {
						var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
						 if (!regex.test(valorEmail2.trim())) {
							$("#email2").attr("class","form-control is-invalid");
							$("#email2").parent().children("span").attr("class","invalid-feedback");
							$("#email2").parent().children("span").text("Debe ingresar un Email valido").show();
						  	return false;
						}

						else {
							var valorEmail = document.getElementById("email").value;
							if (valorEmail2 !== valorEmail) {
								$("#email2").attr("class","form-control is-invalid");
								$("#email2").parent().children("span").attr("class","invalid-feedback");
								$("#email2").parent().children("span").text("Los emails deben ser identicos").show();
							  	return false;
							}
							else{
								$("#email2").attr("class","form-control is-valid");
								$("#email2").parent().children("span").text("").hide();
								return true;
							}
						}
					}
				}

				if (campo === 'password') {
					var valorpassword = document.getElementById("password").value;
					if( valorpassword == null || valorpassword.length == 0 || /^\s+$/.test(valorpassword) ) {
						$("#password").attr("class","form-control is-invalid");
						$("#password").parent().children("span").attr("class","invalid-feedback");
						$("#password").parent().children("span").text("Debe ingresar algun caracter").show();
						return false;
					}
					else {
						if (valorpassword.length > 256) {
							$("#password").attr("class","form-control is-invalid");
							$("#password").parent().children("span").attr("class","invalid-feedback");
							$("#password").parent().children("span").text("Maximo 256 caracteres").show();
							return false;
						}
						else{
							$("#password").attr("class","form-control is-valid");
							$("#password").parent().children("span").text("").hide();
							return true;
						}
					}
				}

				if (campo === 'nickname') {
					var valornickname = document.getElementById("nickname").value;
					if( valornickname == null || valornickname.length == 0 || /^\s+$/.test(valornickname) ) {
						$("#nickname").attr("class","form-control is-invalid");
						$("#nickname").parent().children("span").attr("class","invalid-feedback");
						$("#nickname").parent().children("span").text("Debe ingresar algun caracter").show();
						return false;
					}
					else {
						if (valornickname.length > 25) {
							$("#nickname").attr("class","form-control is-invalid");
							$("#nickname").parent().children("span").attr("class","invalid-feedback");
							$("#nickname").parent().children("span").text("Maximo 25 caracteres").show();
							return false;
						}
						else {
							$("#nickname").attr("class","form-control is-valid");
							$("#nickname").parent().children("span").text("").hide();
							return true;
						}	
					}
				}
				if (campo === 'invocador') {
					var valorinvocador = document.getElementById("invocador").value;
					if( valorinvocador == null || valorinvocador.length == 0 || /^\s+$/.test(valorinvocador) ) {
						$("#invocador").attr("class","form-control is-invalid");
						$("#invocador").parent().children("span").attr("class","invalid-feedback");
						$("#invocador").parent().children("span").text("Debe ingresar algun caracter").show();
						return false;
					}
					else {
						if (valorinvocador.length > 25) {
							$("#invocador").attr("class","form-control is-invalid");
							$("#invocador").parent().children("span").attr("class","invalid-feedback");
							$("#invocador").parent().children("span").text("Maximo 25 caracteres").show();
							return false;
						}
						else{
							$("#invocador").attr("class","form-control is-valid");
							$("#invocador").parent().children("span").text("").hide();
							return true;
						}
			
					}
				}
				if (campo === 'nombre') {
					var valornombre = document.getElementById("nombre").value;
					if( valornombre == null || valornombre.length == 0 || /^\s+$/.test(valornombre) ) {
						$("#nombre").attr("class","form-control is-invalid");
						$("#nombre").parent().children("span").attr("class","invalid-feedback");
						$("#nombre").parent().children("span").text("Debe ingresar algun caracter").show();
						return false;
					}
					else {
						if (valornombre.length > 25) {
							$("#nombre").attr("class","form-control is-invalid");
							$("#nombre").parent().children("span").attr("class","invalid-feedback");
							$("#nombre").parent().children("span").text("Maximo 25 caracteres").show();
							return false;
						}
						else{
							$("#nombre").attr("class","form-control is-valid");
							$("#nombre").parent().children("span").text("").hide();
							return true;
						}
					}
				}
				if (campo === 'apellido') {
					var valorapellido = document.getElementById("apellido").value;
					if( valorapellido == null || valorapellido.length == 0 || /^\s+$/.test(valorapellido) ) {
						$("#apellido").attr("class","form-control is-invalid");
						$("#apellido").parent().children("span").attr("class","invalid-feedback");
						$("#apellido").parent().children("span").text("Debe ingresar algun caracter").show();
						return false;
					}
					else {
						if (valorapellido.length > 25) {
							$("#apellido").attr("class","form-control is-invalid");
							$("#apellido").parent().children("span").attr("class","invalid-feedback");
							$("#apellido").parent().children("span").text("Maximo 25 caracteres").show();
							return false;
						}
						else{
							$("#apellido").attr("class","form-control is-valid");
							$("#apellido").parent().children("span").text("").hide();
							return true;
						}
					}
				}
				if (campo === 'deposito') {
					var valordeposito = document.getElementById("deposito").value;
					if( valordeposito == null || valordeposito.length == 0 || /^\s+$/.test(valordeposito) ) {
						$("#deposito").attr("class","form-control is-invalid");
						$("#deposito").parent().children("span").attr("class","invalid-feedback");
						$("#deposito").parent().children("span").text("Debe ingresar algun caracter").show();
						return false;
					}
					else {
						if (valordeposito.length > 256) {
							$("#deposito").attr("class","form-control is-invalid");
							$("#deposito").parent().children("span").attr("class","invalid-feedback");
							$("#deposito").parent().children("span").text("Maximo 256 caracteres").show();
							return false;
						}
						else
						{
							$("#deposito").attr("class","form-control is-valid");
							$("#deposito").parent().children("span").text("").hide();
							return true;
						}
						
					}
				}
	}

