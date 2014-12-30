<?php

class UsuarisController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /usuaris
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Usuari::get());
		// $usus = Response::json(Usuari::get());
		// return View::make('usuaris.create')->with('usus', $usus);
	}


	/**
	* Método que devuelve la vista para login
	*/
	public function login()
	{
		return View::make('usuaris.login');
	}


	/**
	* Método que realiza el login. Recogiendo el nombre y password de formulario de login
	* Si es ok devuelve vista de proyectos. Si No es ok devuelve vista login con mensaje de error.
	*/
	public function dologin()
	{
		$auth = Auth::attempt(array('nom'=>Input::get('nom'), 'password'=>Input::get('password')));
		if($auth) {
			return Redirect::to('proyectos')->with('message', 'Todo OK');
		} else {
			return Redirect::to('usuaris/login')
				->with('message', 'Error de Login')
				->withInput();
		}
	}

	/**
	* Método que realiza el log out del usuario y devuelve vista formulario login
	*/
	public function logout()
	{
		Auth::logout();
		return Redirect::to('usuaris/login')
				->with('message', 'Hasta pronto amigo');
	}


	/**
	 * Show the form for creating a new resource.
	 * GET /usuaris/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /usuaris
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /usuaris/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /usuaris/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /usuaris/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /usuaris/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}