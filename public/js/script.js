$(document).ready(function(){
	//alert('hola')
});
function validate(id, valor) {
	switch(id) {
		case 'nom':
			validarNom(valor);
		break;
		case 'password':
			validarPass(valor);
		break;
	}
}
function validarNom(value) {
	var x = document.getElementById('nom');
	var xx = document.getElementById('inputnom');
	var nombre = value;
	var patro = /[^A-Za-z0-9À-ÒÁ-Úá-ú ]/;
	if (nombre.match(patro) || nombre.length<2) {
		x.classList.add('fondo-error');
		xx.classList.add('has-error');
		x.setAttribute('data-toggle', 'tooltip');
		x.setAttribute('data-placement', 'right');

		$('#nom').tooltip('show');
	} else if (x.hasAttribute('data-toggle')) {
		x.removeAttribute('data-toggle');
		x.removeAttribute('data-placement');
		x.removeAttribute('title');
		x.classList.remove('fondo-error');
		xx.classList.remove('has-error');
		xx.classList.add('has-success');
		$('#nom').tooltip('hide');
	} else {
		xx.classList.add('has-success');
		$('#nom').tooltip('destroy');
	}
}

function validarPass(value) {

}