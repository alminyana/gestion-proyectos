<?php

class CategoriasController extends \BaseController {

	public function crear()
	{
		$data = Input::all();
		//$data = $_GET['data'];
		//var_dump($data);
		if (Request::ajax()) {
			return Response::json(array('cats'=>$data));
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