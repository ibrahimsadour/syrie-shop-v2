<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([

            'abbr' => 'ar',
            'locale' => 'sy',
            'name' => 'Arabic',
            'direction' => 'rtl',
            'active' => '1',
            
        ]);
    }
}
