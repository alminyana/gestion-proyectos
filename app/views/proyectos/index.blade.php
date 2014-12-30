@extends('layout.main-log')
@section('content')
<style>
#info {
	margin-top: .7em;
}
.label {
	padding: .7em;
}
#Modal-segundo .modal-dialog {
	width: 300px;
	margin-top: 90px;
}
.input-group {
	margin: 0 1em;
}
	form {
		margin-bottom: 2em;
	}
	#mostrar-cats {
		width: 100%;
		height: 100px;
		overflow: scroll;
		padding: 1em;
	}
	span.label {
		margin: .5em .5em;
		cursor: pointer;
	}
	span.glyphicon {
		margin-left: .5em;
		
	}
</style>
    {{-- HTML::script('js/categorias.js') --}}
    
	<div class="container index-proyectos">
		<h1 class="text-danger">Index proyectos</h1>
		<div class="row sobre-tabla">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h3 class="text-danger">Lista de Proyectos</h3>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right">
					<div class="btn-proyectos">
						<a id="boton-modal" class="btn btn-primary" href="#myModal" data-toggle="modal">Categorías</a>

						<a class="btn btn-danger">Nuevo Proyecto</a>
					</div>				
			</div>
		</div>
		<div class="row">
			<table class="table table-hover">
				<thead>
					<th>ID</th>
					<th>PROYECTO</th>
					<th>CATEGORÍA</th>
					<th>PUBLICACIÓN</th>
					<th>ESTADO</th>
					<th>ACCIONES</th>
					<th>IDIOMA</th>
				</thead>
				<tbody>
					<td>1</td>
					<td>dhgj</td>
					<td>cvbxvb</td>
					<th>asdf</th>
					<th>asdf</th>
					<th>XX</th>
					<th>asdf</th>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Modal HTML (Hidden por defecto)-->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title text-danger">CATEGORÍAS</h2>
                </div>
                <div class="modal-body">
                    <h4 class="text-info">Añade una Categoría</h4>
                    {{Form::open(array('url'=>'', 'class'=>'','id'=>'formu-categorias')) }}
					<div class="input-group">
					 <input name="categoria" type="text" class="form-control" placeholder="Categoría..." id="categoria" required>
				      <span class="input-group-btn">
				        <button class="btn btn-primary" type="submit" id="anadir-cat">Añadir</button>
				      </span>  
				    </div>
				    {{ Form::close() }}
                    <h4 class="text-warning">Lista de Categorías</h4>
               			<div id="mostrar-cats"></div>
               			<h5 class="text-info">Marca una Categoría para eliminarla</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

	<!-- Modal II  para confirmar borrado etiqueta -->
  <div id="Modal-segundo" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-danger">Confirmar Borrado</h4>
      </div>
      <div class="modal-body">
        <p class="text-primary">Seguro que quiere eliminar la categoría</p>
			<span class="label label-danger esta center"></span>
			<p id="info" class="text-info">Esta acción no se puede deshacer</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="cat-borrar" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop