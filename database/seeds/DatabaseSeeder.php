<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Database\Seeds\EntriesTableSeeder;
use Database\Seeds\PatientsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        //App\Entry::truncate();
        //App\Patient::truncate();
        $this->call('UsersTableSeeder');
        $this->call('DiariesTableSeeder');
        $this->call('EntriesTableSeeder');

       // Model::reguard();
    }
}
