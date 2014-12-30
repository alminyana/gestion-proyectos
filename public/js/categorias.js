$(document).ready(function(){
	
	$('#formu-categorias').submit(function(e){
		e.preventDefault();
		var dato = document.getElementById('categoria');
		var valor = dato.value;
		//alert(valor);
		$.ajax ({
			type: 'POST',
			url: 'categorias/crear',
			data: $('#formu-categorias').serialize(),
			//data: valor,
			dataType: 'json',
			//beforeSend: function(){},
			success: function(response){
				console.log(data);
				if(response) {
					for (data in respuesta.cats) {
						console.log(respuesta.cats[data]);
					}
				}
			}
		})
	});


});