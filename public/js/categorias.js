$(document).ready(function(){
	
	$('#anadir-cat').click(function(){
		var dato = document.getElementById('nombre-cat');
		$.ajax ({
			type: 'POST',
			url: 'categorias/crear',
			data: {nombre: dato.value},
			dataType: 'json',
			beforeSend: function(){},
			success: function(response){
				console.log('ok');
			}
		})
	});


});