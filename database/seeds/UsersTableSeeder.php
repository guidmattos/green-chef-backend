<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
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

        \App\User::create([
            'email' => 'example@example.com',
            'password' => '$2y$10$JHOqDn5w609lR1KTz5ZuueHekz3AiT013ZhcXegZuEqTVLTEOlmSm', //teste123
            'role' => 'patient'
        ]);

        foreach (range(1, 20) as $index) {
            \App\User::create([
                'email' => $faker->email,
                'password' => $faker->password,
                'name' => $faker->name,
                'birthdate' => $faker->dateTimeThisCentury,
                'gender' => $faker->randomElement(['M', 'F']),
                'DmType' => $faker->randomElement([1, 2]),
                'userGroup' => $faker->randomDigit,
                'confirmed' => $faker->boolean(),
                'role' => $faker->randomElement(['admin', 'patient'])
            ]);

        }

    }
}
