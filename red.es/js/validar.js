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
	fecha_actual=new date(); 

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
		else if (estu_nacimiento>fecha_actual) {
		document.getElementById("alert").innerHTML = "La fecha no es valida";
		return false
	}
	else if (estu_identificacion.length>11) {
		document.getElementById("alert").innerHTML = "El número de identificación es muy largo";
        return false;
	}
		else if (isNaN(estu_identificacion)) {
		document.getElementById("alert").innerHTML = "Solo se aceptan números en la identificación";
         return false;
	}
		else if (estu_celular.length>12) {
		document.getElementById("alert").innerHTML = "El número de celular es muy largo";
          return false;
	}
		else if (isNaN(estu_celular)) {
		document.getElementById("alert").innerHTML = "Solo se aceptan números en el celular";
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
			document.getElementById("alert").innerHTML = "El número del acudiente es muy largo";
          return false;
	}
	else if (isNaN(estu_celularAcudiente)) {
		document.getElementById("alert").innerHTML = "Solo se aceptan numeros en el celular";
         return false;
	}
}

function validarActi(){

	var acti_nombre, acti_descripcion;

	acti_nombre = document.getElementById("acti_nombre").value;
	acti_descripcion = document.getElementById("acti_descripcion").value;

	if (acti_nombre === "" || acti_descripcion === "" ) {
            document.getElementById("alert").innerHTML = "Todos los campos son obligatorios";
            return false;
	}

	else if (acti_nombre.length>50) {
		document.getElementById("alert").innerHTML = "El nombre del la actividad es muy largo";
            return false;
	}

	else if (/^([0-9])*$/.test(acti_nombre)) {
		document.getElementById("alert").innerHTML = "No se aceptan caracteres extraños en el nombre";
            return false;
	}
	
	else if (/^([0-9])*$/.test(acti_descripcion)) {
		document.getElementById("alert").innerHTML = "No se aceptan caracteres extraños en la descripción";
            return false;
	}
}


function validarHora(){
	var hora_fecha, hora;

	hora_fecha = document.getElementById("hora_fecha").value;
	hora = document.getElementById("hora").value;

	if (hora_fecha === "" || hora === "") {
            document.getElementById("alert").innerHTML = "Todos los campos son obligatorios";
            return false;
	}

	else if (hora>5) {
		document.getElementById("alert").innerHTML = "Valor inválido";
            return false;
	}
	else if (isNaN(hora)) {
		document.getElementById("alert").innerHTML = "Solo se aceptan números";
         return false;
	}
	else if (hora_fecha<'2019-5-4') {
		document.getElementById("alert").innerHTML = "Fecha no valida";
       
}

function validarCole(){

	var cole_nombre, cole_celular, cole_direccion;

	cole_nombre=document.getElementById("cole_nombre").value;
	cole_celular=document.getElementById("cole_celular").value;
	cole_direccion=document.getElementById("cole_direccion").value;

	if (cole_nombre === "" || cole_celular === "" || cole_direccion === "") {
            document.getElementById("alert").innerHTML = "Todos los campos son obligatorios";
            return false;
	}

	else if (cole_nombre.length>50) {
		document.getElementById("alert").innerHTML = "El nombre del colegio es muy largo";
            return false;
	}

	else if (/^([0-9])*$/.test(cole_nombre)) {

		document.getElementById("alert").innerHTML = "No se aceptan caracteres extraños en el nombre";
            return false;
	}

	else if (cole_celular.length>11) {
		document.getElementById("alert").innerHTML = "El número del acudiente es muy largo";
          	return false;
	}
	else if (isNaN(cole_celular)) {
		document.getElementById("alert").innerHTML = "Solo se aceptan numeros en el celular";
         	return false;
	}

	else if (cole_direccion.length>31) {
		document.getElementById("alert").innerHTML = "La direccion es muy larga";
          	return false;
	}


}
function validarProgra(){

	var prog_fecha, prog_horaInicio, prog_horaFinal;

	var f=new date(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());

	prog_fecha=document.getElementById("prog_fecha").value;
	prog_horaInicio=document.getElementById("prog_horaInicio").value;
	prog_horaFinal=document.getElementById("prog_horaFinal").value;


 if (prog_fecha<f) {
		document.getElementById("alert").innerHTML = "Fecha no valida";
		return false;
	}
}

