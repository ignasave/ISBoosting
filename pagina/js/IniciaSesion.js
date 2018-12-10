	$(document).ready(function(){
		$("span").hide();
		$('#error').hide();
	});
	// FUNCION VERIFICAR, LLAMA A TODAS LAS FUNCIONES VALIDACION DEL FORMULARIO
	function verificar(){
				var v1=0,v2=0;
				v1=validacion('usuario');
				v2=validacion('password');
				$('#error').hide();
				if (v1===false || v2===false){
					 console.log("No submit");
					}
				else
	            {
	            	console.log(" submit");
	            	var datos = { 
	            		'usuario' : $("#usuario").val(),
	            		'password' : $("#password").val()
	            	};
	            	$.ajax({
	            		url: 'partials/Procesar_Login.php',
	            		type: 'POST',
	            		dataType: 'html',
	            		data: datos,
	            		
	            		timeout : function (){
	            			$('#error').show();
	            			$("#error").children().children().html('Error: Se agoto el tiempo de respuesta del servidor!');
	            		},

	            		success : function (response) {                       	
                        	console.log(response);
                        	response = response.trim();
                        	if (response == '"correcto"') {
                        		console.log("correcto");
                        		location.replace("http://localhost/pagina/index.php");
                        	}
                        	else if (response == '"incorrecto"') {
                        		$('#error').show();
                        		$("#error").children().children().html('Error: Usuario o contraseña incorrectos');
                        	}
                        	else{
                        		$('#error').show();
                				$("#error").children().children().html('Error: hubo un error en el servidor, intente nuevamente');
                        	}
                        	
                		},

                		error : function(){
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
	}



