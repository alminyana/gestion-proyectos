<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsuarisTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		Usuari::create([
			'nom' 	=> 'enric',
			'mail'	=> 'enric@eideo.es',
			'password' => 'soyenric'
		]);
		Usuari::create([
			'nom' 	=> 'beto',
			'mail'	=> 'beto@eideo.es',
			'password' => 'soybeto'
		]);
		foreach(range(1, 2) as $index)
		{
			Usuari::create([
				'nom' => $faker->nom,
				'mail' => $faker->mail,
				'password' => $faker->password
			]);
		}
	}

}