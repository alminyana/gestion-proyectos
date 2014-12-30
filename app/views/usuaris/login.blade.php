@extends('layout.main-log')
<style>
	.caja {
		width: 100%;
		height: 440px;
		background-color: white;
		padding: 1em;
	}

	.caja h4 {
		text-align: center;
	}
	.raya {
		width: 100%;
		height: 70px;
		background-color: rgb(214,217,219);
		border-top: solid 5px rgb(192,191,195);
		padding: 1.5em;
	}
	.usuari {

		width: 100px;
		height: 100px;

	}

</style>
@section('content')
	<div class="container">
			<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
				<div class="caja">
				<br/><br/>
					<div class="foto">

						{{HTML::image('img/usuaris/astronaut.jpg', 'usuari',array ('class'=>'img-circle usuari center-block'))}}
					</div>
					<h4>usuari</h4>
					<div class="formu">
						{{ Form::open(array('url'=>'usuaris/login', 'class' => 'form-login','id'=>'formulogin','method'=>'post')) }}


							<ul>
					        @foreach($errors->all() as $error)
					            <li>{{ $error }}</li>
					        @endforeach
					    </ul>

			
				    <?php  //Mail  ?>
				    <div id="inputnom" class="form-group">
				    	{{ Form::label('nom','Nombre') }}
				    	{{ Form::text('nom', null, array('placeholder'=>'Nom','class'=>'form-control input-lg','id'=>'nom', 'onblur'=>'validate(this.id,this.value)','required'=>'true', 'title'=>'Campo nombre incorrecto')) }}
				    </div>
				    <?php  //Password  ?>
				    <div id="inputpassword" class="form-group">
				    	{{ Form::label('password','Password') }}
			    		{{ Form::password('password', array('placeholder'=>'Password','class'=>'form-control input-lg','id'=>'password', 'onblur'=>'validate(this.id,this.value)','required'=>'true')) }}

				    </div>
				    <br/>
				    <div class="form-group">
				    	{{ Form::submit('Login',array('class'=>'btn btn-success btn-lg btn-block','id'=>'idlogin'))}}
				    </div>
				{{ Form::close() }}
					</div>
				</div>
				



				<div class="raya">
					<a href="">¿Recuperar contraseña?</a>
				</div>

			</div>
	</div>
@stop