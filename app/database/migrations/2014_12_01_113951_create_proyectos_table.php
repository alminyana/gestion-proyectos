
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom')->unique();
			$table->integer('id_categoria')->unsigned()->index()->nullable();
			$table->boolean('estado');
			$table->boolean('ingles');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyectos');
	}

}
