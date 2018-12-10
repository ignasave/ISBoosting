
    function disableDiamond(x){
			var I = document.getElementById("I_O")
			var II = document.getElementById("II_O")
			var III = document.getElementById("III_O")
			var IV = document.getElementById("IV_O")
			var V = document.getElementById("V_O")
			if (x.value === "bronce" || x.value === "plata" || x.value === "oro" || x.value === "platino") {}{	
				$(I).removeAttr("disabled");
				$(II).removeAttr("disabled");
				$(III).removeAttr("disabled");
				$(IV).removeAttr("disabled");
			}
			if (x.value === "diamante") {
				$(I).prop("disabled", true);
				$(II).prop("disabled", true);
				$(III).prop("disabled", true);
				$(IV).prop("disabled", true);
			}	
		}
	function cambiaLigaA(x){
				var imagen = document.getElementById("imgLigaA");
				if (x.value === "bronce") {
					imagen.src = "files/images/img1.jpg";
				}
				else if (x.value === "plata") {
					imagen.src ="files/images/img2.jpg";
				}
				else if (x.value === "oro") {
					imagen.src ="files/images/img3.jpg";
				}
				else if (x.value === "platino") {
					imagen.src ="files/images/img4.jpg";
				}
			}
	function cambiaLigaO(x){
				var imagen = document.getElementById("imgLigaO");
				if (x.value === "bronce") {
					imagen.src = "files/images/img1.jpg";
				}
				else if (x.value === "plata") {
					imagen.src ="files/images/img2.jpg";
				}
				else if (x.value === "oro") {
					imagen.src ="files/images/img3.jpg";
				}
				else if (x.value === "platino") {
					imagen.src ="files/images/img4.jpg";
				}
				else if (x.value === "diamante") {
					imagen.src ="files/images/img5.jpg";
				}
			}
			function cambiaServerD(x){
				var imagen = document.getElementById("imgServer1");
				if (x.value === "LAS") {
					imagen.src = "files/images/img1.jpg";
				}
				else if(x.value === "LAN") {
					imagen.src = "files/images/img2.jpg";
				}
				else if (x.value === "BR") {
					imagen.src ="files/images/img3.jpg";
				}
				else if (x.value === "EUW") {
					imagen.src ="files/images/img4.jpg";
				}
				else if (x.value === "EUNE") {
					imagen.src ="files/images/img5.jpg";
				}
			}
			function cambiaServerP(x){
				var imagen = document.getElementById("imgServer2");
				if (x.value === "LAS") {
					imagen.src = "files/images/img1.jpg";
				}
				else if(x.value === "LAN") {
					imagen.src = "files/images/img2.jpg";
				}
				else if (x.value === "BR") {
					imagen.src ="files/images/img3.jpg";
				}
				else if (x.value === "EUW") {
					imagen.src ="files/images/img4.jpg";
				}
				else if (x.value === "EUNE") {
					imagen.src ="files/images/img5.jpg";
				}
			}
			function cambiaServerV(x){
				var imagen = document.getElementById("imgServer3");
				if (x.value === "LAS") {
					imagen.src = "files/images/img1.jpg";
				}
				else if(x.value === "LAN") {
					imagen.src = "files/images/img2.jpg";
				}
				else if (x.value === "BR") {
					imagen.src ="files/images/img3.jpg";
				}
				else if (x.value === "EUW") {
					imagen.src ="files/images/img4.jpg";
				}
				else if (x.value === "EUNE") {
					imagen.src ="files/images/img5.jpg";
				}
			}
			function cambiaCola(x){
				var imagen = document.getElementById("imgCola1");
				if (x.value === "soloq") {
					imagen.src = "files/images/img1.jpg";
				}
				else if(x.value = "flex"){
					imagen.src = "files/images/img2.jpg";
				}
			}
			function cambiaCola2(x){
				var imagen = document.getElementById("imgCola2");
				if (x.value === "soloq") {
					imagen.src = "files/images/img1.jpg";
				}
				else if(x.value = "flex"){
					imagen.src = "files/images/img2.jpg";
				}
			}
			function cambiaCola3(x){
				var imagen = document.getElementById("imgCola3");
				if (x.value === "soloq") {
					imagen.src = "files/images/img1.jpg";
				}
				else if(x.value = "flex"){
					imagen.src = "files/images/img2.jpg";
				}
			}


	function validarHorario(){
		valorInicioSTR = $('#horainicio').val();
		valorFinalSTR = $('#horafinal').val();
		valorInicioINT = parseInt(valorInicioSTR);
		valorFinalINT = parseInt(valorFinalSTR);

		resta = valorFinalINT - valorInicioINT;

		if (resta < 0 || resta > 3) {
			$('#alerta_horario').html('El horario libre de boosters es incorrecto o supera las 3 hs')
		}
		
		else{
			$('#alerta_horario').html('Recuerda que si ganas 12 PL o menos, transformaremos tu encargo en victorias individuales hasta que sea necesario.')
		}

	}

	function validarDivisiones(){

			validarHorario();

			var ligaA = document.getElementById("ligaA").value;
			var ligaO = document.getElementById("ligaO").value;
			var divisionA = document.getElementById("divisionA").value;
			var divisionO = document.getElementById("divisionO").value;

			var valLigaA = 0;
			var valLigaO = 0;


			if (ligaA === "bronce") {
				valLigaA = 0;
			}
			if (ligaA === "plata") {
				valLigaA = 6;
			}
			if (ligaA === "oro") {
				valLigaA = 11;
			}
			if (ligaA === "platino") {
				valLigaA = 16;
			}

			if (ligaO === "bronce") {
				valLigaO = 0;
			}
			if (ligaO === "plata") {
				valLigaO = 6;
			}
			if (ligaO === "oro") {
				valLigaO = 11;
			}
			if (ligaO === "platino") {
				valLigaO = 16;
			}
			if (ligaO === "diamante") {
				valLigaO = 21;
			}

			if (divisionA === "V") {
				valLigaA = valLigaA + 1;
			}
			if (divisionA === "VI") {
				valLigaA = valLigaA + 2;
			}
			if (divisionA === "III") {
				valLigaA = valLigaA + 3;
			}
			if (divisionA === "II") {
				valLigaA = valLigaA + 4;
			}
			if (divisionA === "I") {
				valLigaA = valLigaA + 5;
			}

			if (divisionO === "V") {
				valLigaO = valLigaO + 1;
			}
			if (divisionO === "VI") {
				valLigaO = valLigaO + 2;
			}
			if (divisionO === "III") {
				valLigaO = valLigaO + 3;
			}
			if (divisionO === "II") {
				valLigaO = valLigaO + 4;
			}
			if (divisionO === "I") {
				valLigaO = valLigaO + 5;
			}

			console.log(valLigaA);
			console.log(valLigaO);
			if (valLigaA >= valLigaO) {
				$("#alertError1").remove();
				$("#posError1").after('<div class="col-12 mt-3 mb-0 pb-0 mx-0 px-0" id="alertError1"><div class="alert alert-danger" role="alert"  >Tienes que seleccionar una division objetivo mayor a la actual.</div></div><div class="w-100 p-0 m-0"></div>');
			}
			else{
				$("#alertError1").remove();
			}
			
	}

	

		

