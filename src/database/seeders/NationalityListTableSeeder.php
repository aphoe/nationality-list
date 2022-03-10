<?php

namespace Database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NationalityListTableSeeder extends Seeder
{
   
    public function run()
    {
        DB::unprepared($this->getNationalitySql());
        $faker = Faker::create();

        for ($i = 1; $i <= 30; $i++) {
            DB::table(config('nationality_listsrandomable.table_name'))->insert([
                'id' => $faker->id,
                'name' => $faker->lastName,
            ]);
        };
    }

    private function getNationalitySql()
    {
        
       
    }
}