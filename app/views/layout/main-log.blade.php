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
	<style>
		body {
			padding-top: 7em;
		}
	</style>
</head>
<body>

	@yield('content')

<!-- jquery -->
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<!-- bootstrap js -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>