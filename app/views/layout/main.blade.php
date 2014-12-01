<?php
/**
* Main principal Eideo webApp
* author: Enric Almiñana
* date: 30/11/2014
* version: 1.0.
* Larvel 4.2
**/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eideo Gestor de Contenidos</title>
	{{HTML::style('css/bootstrap.css')}}
	{{HTML::style('css/eideo.css')}}
</head>
<body>
<div class="container" id="main">
		<div id="nav" class="navbar navbar-fixed-top">
				<div class="container">
					<div class="row hidden-xs">
						<div id="float" class="col-xs-12">
							<a class="navbar-brand" href="/"><img class="pull-left" src="/img/logo/logo.png" alt="Logo"></a>
							<hr class="linea pull-left"/><h3 class="pull-left">Gestor de Contenidos</h3>
						</div>
					</div>


					<div class="row hidden-sm hidden-md hidden-lg">
						<div class="col-xs-3">
							<a class="navbar-brand" href="/"><img src="/img/logo/logo-petit.png" alt="Logo"></a>
						</div>
						<div id="filete" style="margin-left: 1em;" class="col-xs-6">
							<hr class="linea"/ style="margin-left: .5em;"><h4>Gestor de Contenidos</h4>
						</div>
					</div>

					<div class="row">
						<div class="navbar col-xs-12 col-sm-10 col-md-8 col-lg-7">
							<ul id="menu" class="list list-inline unstiled-list">
								<li><a href="#">PROYECTOS</a></li>
								<li><a href="#">NOTICIAS</a></li>
								<li><a href="#">PERFIL</a></li>
								<li><a href="#">PREMIOS</a></li>
								<li><a href="#">PUBLICACIONES</a></li>
							</ul>
						</div>
						
						
							<div class="col-sm-1 col-md-1 col-md-offset-2 col-lg-1 col-lg-offset-3 fondo">
							<a href="/" class="btn btn-default"><strong>X</strong> SALIR</a>
						</div>
					</div>

				</div>
			</div> <!-- fin navbar -->
		</div>

	@yield('content')

<!-- jquery -->
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<!-- bootstrap js -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>