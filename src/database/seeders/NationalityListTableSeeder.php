<?php

namespace Database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalityListTableSeeder extends Seeder
{
   
    public function run()
    {
        DB::unprepared($this->getNationalitySql());
    }

    private function getCountrySql()
    {
        return "INSERT INTO `nationality_lists` (`id`, `name`) VALUES
            (1, 'Afghanistan'),
            (2, 'Albania'),
            (3, 'Algeria'),
            (4, 'AS'),
            (5, 'AD'),
            (6, 'AO'),
            (7, 'AI'),
            (8, 'AQ'),
            (9, 'AG'),
            (10, 'ZW);";
       
    }
}