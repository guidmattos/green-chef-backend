<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class EntriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$patients = \App\User::where('role', '=', 'patient')->lists('id')->toArray();

		foreach(range(1, 500) as $index)
		{
			$entry = new \App\Entry([
				'datetime' => $faker->dateTimeThisMonth->format('Y-m-d H:i:s'),
				'event' => $faker->sentence(1),
				'glucose' => $faker->numberBetween(0, 120),
				'cho' => $faker->numberBetween(0, 120),
				'med' => $faker->numberBetween(0, 120),
				'medType' => $faker->word,
				'notes' => $faker->paragraph(3),
				'user_id' => $faker->randomElement($patients)
			]);
			App\Entry::add($entry);
		}		
	}
}