<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $patients = \App\User::all()->lists('id')->toArray();
		foreach(range(1, 500) as $index)
		{
			App\Diary::create([
				'text' => $faker->paragraph(3),
				'user_id' => $faker->randomElement($patients)
				]);
		}	
    }
}
