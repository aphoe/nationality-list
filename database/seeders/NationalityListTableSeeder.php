<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalListTableSeeder extends Seeder
{
    static $nationalities = [
 
    ];

    public function run()
    {
        foreach (self::$nationalities as $nationality) {
            DB::table('nationality_lists')->insert([
                'name' => $nationality
            ]);
        }
    }
}