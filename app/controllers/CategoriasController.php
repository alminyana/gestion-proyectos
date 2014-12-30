<?php

class CategoriasController extends \BaseController {
	public function borraruna()
	{
		$id = $_POST['categoria'];
		$categoria = Categorium::find($id);
		$categoria->delete();

		$todas = Categorium::all();
		return Response::json(array('cats'=>$todas));
	}
	/*
		Método que se llama al cargar el modal de categorias
		consulta ajax que devuelve todas las categorias de la BD
	*/
	public function listar()
	{
		if (Request::ajax()) {
			$todas = Categorium::all();
			return Response::json(array('cats'=>$todas));
		}
	}

	/**
	* Método llamado por consulta Ajax.
	* Guarda la nueva categoria en BD y devuelve response 
	* con todas las categorias de la BD
	*/
	public function crear()
	{
		$data = Input::get('categoria');
		if (Request::ajax()) {
			if ($data) {
				$categ = new Categorium;
				$categ->nombre_cat = $data;
				$categ->save();

				$categorias = Categorium::all();

				return Response::json(array('cats'=>$categorias));
			}

			// $obs = DB::table('productos')->where('id_subcateg',$sub)->select('id','id_subcateg')->get();
			// return Response::json(array('obs'=>$obs));
		}
	}

	/**
	 * Display a listing of the resource.
	 * GET /categorias
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categorias/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categorias
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /categorias/{id}
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
	 * GET /categorias/{id}/edit
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
	 * PUT /categorias/{id}
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
	 * DELETE /categorias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}