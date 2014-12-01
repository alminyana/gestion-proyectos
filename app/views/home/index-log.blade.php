@extends('layout.main-log')
<style>
	.caja {
		width: 100%;
		height: 400px;
		background-color: white;
	}
	.raya {
		width: 100%;
		height: 70px;
		background-color: rgb(214,217,219);
		border-top: solid 5px rgb(192,191,195);
		padding: 1.5em;
	}
</style>
@section('content')
	<div class="container">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 col-md-4 col-lg-4">
				<div class="caja">
					<h4></h4>
				</div>
				<div class="raya">
					<a href="">¿Recuperar contraseña?</a>
				</div>

			</div>
	</div>
@stop