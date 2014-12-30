<?php
/**
* Main principal Eideo webApp
* author: Enric Almiñana
* date: 29/12/2014
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
			padding-top: 70px;
		}
	</style>
</head>
<body>
	<!--  menu head -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        @if (Auth::check())
          <li><a href="{{URL::to('proyectos')}}">Proyectos</a></li>
        @endif
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
           @if (Auth::check())
                {{Auth::user()->nom}}
              @else
                Acceder
              @endif
          <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li><a href="{{URL::to('usuaris')}}">Json Usuaris</a></li>
            @if (!Auth::check()) 
              <li><a href="{{URL::to('usuaris/login')}}">Log In</a></li>
            @else
              <li><a href="{{URL::to('usuaris/logout')}}">Log Out</a></li>
            @endif
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<!--  contenido -->

  <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            @if(Session::has('message'))
              <div id="alert" class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </i>{{ Session::get('message') }}
              </div>
            @endif
          </div>
        </div>
      </div>


	@yield('content')

<!-- jquery -->
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<!-- bootstrap js -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
<script src="js/categorias.js"></script>
</body>
</html>