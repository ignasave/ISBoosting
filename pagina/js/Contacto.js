		// ESCONDER LOS SPAN
		$("span").hide();
		// FUNCION VERIFICAR, LLAMA A TODAS LAS FUNCIONES VALIDACION DEL FORMULARIO
		function verificar(){
			//console.log("VERIFICAR FUNCIONA");
			var v1=0,v2=0,v3=0,v4=0;
			v1=validacion('email');
            v2=validacion('nombre');
            v3=validacion('asunto');
            v4=validacion('mensaje');
            if (v1===false || v2===false || v3===false || v4===false) {
            	alert("Campos invalidos");
            }
            else
            {
            	console.log(" submit");
	            	var datos = { 
	            		'email' : $("#email").val(),
	            		'nombre' : $("#nombre").val(),
	            		'asunto' : $("#asunto").val(),
	            		'mensaje' : $("#mensaje").val()
	            	};
	            	$.ajax({
	            		url: 'partials/Envio_Contacto.php',
	            		type: 'POST',
	            		dataType: 'html',
	            		data: datos,
	            		
	            		timeout : function (){
	            			//$('#error').show();
	            			//$("#error").children().children().html('Error: Se agoto el tiempo de respuesta del servidor!');
	            			console.log('Error: Se agoto el tiempo de respuesta del servidor!');
	            		},

	            		success : function (response) {
	            			console.log(response);
                        	response = response.trim();
                        	if (response == '"correcto"') {
                        		console.log("correcto");
                        		//location.replace("http://localhost/pagina/index.php");
                        	}
                        	else if (response == '"incorrecto"') {
                        		//$('#error').show();
                        		//$("#error").children().children().html('Error: Usuario o contraseña incorrectos');
                        		console.log('Error: Usuario o contraseña incorrectos');
                        	}
                        	else{
                        		//$('#error').show();
                				//$("#error").children().children().html('Error: hubo un error en el servidor, intente nuevamente');
                        		console.log('Error: hubo un error en el servidor, intente nuevamente');
                        	}
                        	
                		},

                		error : function(){
                			//$('#error').show();
                			//$("#error").children().children().html('Error: hubo un error en el servidor, intente nuevamente');
                			console.log('Error: hubo un error en el servidor, intente nuevamente');
                		}
                	});
	            	
				}
            }
	
		// FUNCION VALIDACION, DEPENDE DEL CAMPO A VALIDAR MODIFICA SU ESTILO PARA DAR A ENTENDER SI ES VALIDO O NO
		function validacion(campo){

			//console.log("VALIDACION FUNCIONA");
			if (campo === 'email') {
				//console.log("EMAIL FUNCIONA");
				var valorEmail = document.getElementById("email").value;
				if( valorEmail == null || valorEmail.length == 0 || /^\s+$/.test(valorEmail) ) {
					//console.log(" NULL EMAIL FUNCIONA");
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

			if (campo === 'asunto') {
				var valorasunto = document.getElementById("asunto").value;
				if( valorasunto == null || valorasunto.length == 0 || /^\s+$/.test(valorasunto) ) {
					$("#asunto").attr("class","form-control is-invalid");
					$("#asunto").parent().children("span").attr("class","invalid-feedback");
					$("#asunto").parent().children("span").text("Debe ingresar algun caracter").show();
					return false;
				}
				else {
					if (valorasunto.length > 25) {
						$("#asunto").attr("class","form-control is-invalid");
						$("#asunto").parent().children("span").attr("class","invalid-feedback");
						$("#asunto").parent().children("span").text("Maximo 25 caracteres").show();
						return false;
					}
					else{
						$("#asunto").attr("class","form-control is-valid");
						$("#asunto").parent().children("span").text("").hide();
						return true;
					}
				}
			}

			if (campo === 'mensaje') {
				var valormensaje = document.getElementById("mensaje").value;
				if( valormensaje == null || valormensaje.length == 0 || /^\s+$/.test(valormensaje) ) {
					$("#mensaje").attr("class","form-control is-invalid");
					$("#mensaje").parent().children("span").attr("class","invalid-feedback");
					$("#mensaje").parent().children("span").text("Debe ingresar algun caracter").show();
					return false;
				}
				else {
					$("#mensaje").attr("class","form-control is-valid");
					$("#mensaje").parent().children("span").text("").hide();
					return true;
				}
			}
		}