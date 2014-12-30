$(document).ready(function(){

	/*
		Método ajax para guardar la nueva categoria en BD
		Response:: capturar todas las categorias de la BD y refrescar
	*/
	$('#formu-categorias').submit(function(e){
		e.preventDefault();
		var dato = document.getElementById('categoria');
		var valor = dato.value;
		var contenido="";
		$.ajax ({
			type: 'POST',
			url: 'categorias/crear',
			data: $('#formu-categorias').serialize(),
			dataType: 'json',
			//beforeSend: function(){},
			success: function(response){
				//$('#formu-categorias').reset();
				if(response) {
					for (one in response.cats) {
						//console.log(response.cats[one].nombre_cat);
						contenido += '<span id="'+response.cats[one].id+'" href="#Modal-segundo" data-toggle="modal" class="label label-danger">'+ response.cats[one].nombre_cat +'</span>';
					}
				}
				$('#mostrar-cats').html(contenido);
			}

		})
	});
	/*
		Método ajax para capturar todas las categorias de la BD al cargar el modal
	*/
	$('#boton-modal').click(function(){
		//$('#mostrar-cats').html('aqui vendrán todas');
		var content="";
		$.ajax ({
			type: 'GET',
			url: 'categorias/listar',
			dataType
			: 'json',
			success: function(response) {
				if(response) {
					for (one in response.cats) {
						//console.log(response.cats[one].nombre_cat);
						content += '<span id="'+response.cats[one].id+'" class="label label-danger">'+ response.cats[one].nombre_cat +'</span>';
					}
				}
				$('#mostrar-cats').html(content);
			}
		});
	});
	/*
		Disparador, al clicar en una categoria lanza una
		consulta ajax para eliminar dicha categoria de la BD
	*/
	$(document).on('click', '.label', function (event){
		event.preventDefault();
		console.log(event.target.id);
		$identif = event.target.id;
		$categoria = $('#'+event.target.id).text();
		//console.log($categoria);
		
		$('#Modal-segundo').modal();
		$('.esta').text($categoria);

		$(document).on('click', '#cat-borrar', function (){
		//console.log(event.target.id);
		$esta = $identif;
		var content="";
		$.ajax({
			type: 'POST',
			url: 'categorias/borraruna',
			data: {categoria: $esta},
			dataType: 'json',
			success: function(response){
				if(response) {
					for (one in response.cats) {
						//console.log(response.cats[one].nombre_cat);
						content += '<span id="'+response.cats[one].id+'" class="label label-danger">'+ response.cats[one].nombre_cat +'</span>';
					}
				}
				$('#mostrar-cats').html(content);
			}
		});
	});
	}); 


	
	

});