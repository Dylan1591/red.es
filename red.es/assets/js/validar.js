function validarEstu(){
	var estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_correo, estu_nombreAcudiente, estu_celularAcudiente, expresion;
	estu_nombre = document.getElementById("estu_nombre").value;
	estu_apellido = document.getElementById("estu_apellido").value;
	estu_identificacion = document.getElementById("estu_identificacion").value;
	estu_nacimiento = document.getElementById("estu_nacimiento").value;
	estu_celular = document.getElementById("estu_celular").value;
	estu_correo = document.getElementById("estu_correo").value;
	estu_nombreAcudiente = document.getElementById("estu_nombreAcudiente").value;
	estu_celularAcudiente = document.getElementById("estu_celularAcudiente").value;

	expresion = /\w+@\w+\.+[a-z]/;

	if (estu_nombre === "" || estu_apellido === "" || estu_identificacion === "" || estu_nacimiento === "" || estu_celular === "" || estu_correo === "" || estu_nombreAcudiente === "" || estu_celularAcudiente === "") {
            document.getElementById("alert").innerHTML = "Todos los campos son obligatorios";
            return false;
	}
		else if (estu_nombre.length>50) {
		document.getElementById("alert").innerHTML = "El nombre del estudiante es muy largo";
            return false;
	}
		else if (/^([0-9])*$/.test(estu_nombre)) {
		document.getElementById("alert").innerHTML = "No se aceptan caracteres extraños en el nombre";
            return false;
	}
		else if (estu_apellido.length>50 ) {
		document.getElementById("alert").innerHTML = "El apellido del estudiante es muy largo";
            return false;
	}
        else if (/^([0-9])*$/.test(estu_apellido)) {
		document.getElementById("alert").innerHTML = "No se aceptan caracteres extraños en el apellido";
            return false;
	}
		else if (estu_identificacion.length>11) {
			document.getElementById("alert").innerHTML = "El numero de identificacion es muy largo";
            return false;
	}
		else if (isNaN(estu_identificacion)) {
		document.getElementById("alert").innerHTML = "Solo se aceptan numeros en la identificacion";
         return false;
	}
		else if (estu_celular.length>12) {
		document.getElementById("alert").innerHTML = "El numero de celular es muy largo";
          return false;
	}
		else if (isNaN(estu_celular)) {
		document.getElementById("alert").innerHTML = "Solo se aceptan numeros en el celular";
         return false;
	}
		else if (estu_correo.length>50) {
			document.getElementById("alert").innerHTML = "El correo es muy largo";
          return false;
	} 
		else if (!expresion.test(estu_correo)) {
		document.getElementById("alert").innerHTML = "El correo no es valido";
          return false;
	}
		else if (estu_nombreAcudiente.length>50) {
		document.getElementById("alert").innerHTML = "El nombre del acudiente es muy largo";
          return false;
	}
		else if (/^([0-9])*$/.test(estu_nombreAcudiente)) {
		document.getElementById("alert").innerHTML = "No se aceptan caracteres extraños en el nombre";
            return false;
     }
		else if (estu_celularAcudiente.length>12) {
			document.getElementById("alert").innerHTML = "El numero del acudiente es muy largo";
          return false;
	}
	else if (isNaN(estu_celularAcudiente)) {
		document.getElementById("alert").innerHTML = "Solo se aceptan numeros en el celular";
         return false;
	}
}

function 
