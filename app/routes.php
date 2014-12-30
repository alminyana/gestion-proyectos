<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// ------------------       HOMME       -----------------------
Route::get('/', 'HomeController@showWellcome');
// ------------------       LOGIN       -----------------------
//ruta loguear usuario POST--!
Route::post('usuaris/login', 'UsuarisController@dologin');
//ruta vista formulario Login
Route::get('usuaris/login', 'UsuarisController@login');
//ruta log out usuario
Route::get('usuaris/logout', 'UsuarisController@logout');


// ------------------       CATEGORIAS       -----------------------
Route::post('categorias/crear', 'CategoriasController@crear');



//RUTAS RESOURCES
Route::resource('usuaris', 'UsuarisController');
Route::resource('proyectos', 'ProyectosController');
Route::resource('categorias', 'CategoriasController');

App::missing(function($exception)
{
	return View::make('home.index-log');
});

