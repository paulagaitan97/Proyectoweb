

function logIn(tipo) {
	
	var formulario = document.getElementById("formLogIn");
   	document.getElementById("txtTypeLog").value = tipo;
	
	if(tipo === "desc"){
		return true;
	}else if(tipo === "con"){
		
		if(document.getElementById("selUser").value !== "Seleccione"){
			if (formulario.checkValidity()) {			 
       		  return true;			 
   		 } 
		}else{
            prompt("Selecione un tipo de usuario");
			return false;
		}
		
	 
	 
		
	}
	
	
	
}
