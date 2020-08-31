/*function validar() {

	var nombre, correo, celular, expresion;
	nombre = document.getElementById("name").value;
	correo = document.getElementById("email").value;
	celular = document.getElementById("phone").value;
	expresion = /\w+@\w+\.+[a-z]/;

	if(nombre === "" || correo === "" || celular === "") {
		alert("Todos los campos son obligatorios.");
		return false;
	}

	if(nombre === null || nombre === "") {
		alert("El campo nombre está vacio.");
		return false;
	}

	if(nombre.length>50) {
		alert("El nombre es muy largo");
		return false;
	}

	if(correo.length>100) {
		alert("El correo es muy largo");
		return false;
	}

	if(!expresion.test(correo)) {
		Swal.fire("El correo no es valido");
		return false;
	}

	if(celular.length>9) {
		alert("El celular debe ser de nueve digitos.");
		return false;
	}

	if(isNaN(celular)) {
		alert("El celular ingresado no es un numero.");
		return false;
	}
}*/
// (function(){
/*	var formulario = document.getElementById('formulario'),
		nombre = formulario.name,
		correo = formulario.email,
		celular = formulario.phone,
		error = document.getElementById('error');

	function validarNombre(e){
		if (nombre.value == '' || nombre.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el nombre</li>';
			console.log('Por favor completa el nombre');

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarCorreo(e){
		if (correo.value == '' || correo.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el correo</li>';
			console.log('Por favor completa el correo');

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarCelular(e){
		if (celular.value == '' || celular.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el celular</li>';
			console.log('Por favor completa el celular');

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}


	// Funcion encargada de validar todos los campos
	function validarForm(e){
		// Reiniciamos el error para que inicie sin mensaje.
		error.innerHTML = '';

		validarNombre(e);
		validarCorreo(e);
		validarCelular(e);
	}

	formulario.addEventListener('submit', validarForm);
// }())*/