@extends('layout.main-log')
@section('content')
    {{-- HTML::script('js/categorias.js') --}}
    
	<div class="container index-proyectos">
		<h1 class="text-danger">Index proyectos</h1>
		<div class="row sobre-tabla">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h3 class="text-danger">Lista de Proyectos</h3>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right">
					<div class="btn-proyectos">
						<a class="btn btn-primary" href="#myModal" data-toggle="modal">Categorías</a>

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
					<div class="input-group">
					{{Form::open(array('url'=>'', 'id'=>'formu-categorias')) }}

					 <input name="categoria" type="text" class="form-control" placeholder="Categoría..." id="categoria" required>


				      <span class="input-group-btn">
				        <button class="btn btn-primary" type="submit" id="anadir-cat">Añadir</button>
				      </span>
				     {{ Form::close() }}
				    </div>
                    <p class="text-warning">Lista de Categorías</p>
               			<div id="mostrar-cats"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button id="bot" type="button" class="btn btn-danger">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@stop