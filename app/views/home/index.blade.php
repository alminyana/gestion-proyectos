@extends('layout.main-log')
<style>
	#botones a {
		margin-right: 1em;
		float: right;
	}
	.clear {
		clear:both;
	}
	th {
		font-size: 12px;
	}
	thead {
		background-color: grey;
	}
	table {
		margin-top: 1em;
	}
</style>
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h4>Listado de Proyectos</h4>
			</div>
			<div id="botones" class="col-sm-8"><a href="" class="btn btn-danger">Nuevo Proyecto</a><a href="" class="btn btn-default">Categorias</a></div>
			<div class="clear"></div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>PROYECTO</th>
						<th>CATEGORÍA</th>
						<th>PUBLICACIÓN</th>
						<th>ESTADO</th>
						<th>ACCIONES</th>
						<th>INGLÉS</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Proyecto1</td>
						<td>Categoría1</td>
						<td>17/09/2001</td>
						<td>estado</td>
						<td>boton1 boton2</td>
						<td>inglés</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Proyecto1</td>
						<td>Categoría1</td>
						<td>17/09/2001</td>
						<td>estado</td>
						<td>boton1 boton2</td>
						<td>inglés</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@stop