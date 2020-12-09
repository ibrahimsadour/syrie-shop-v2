<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            ['name' => 'ادلب المدينة','slug' => ' ادلب-المدينة',],
            ['name' => ' بنش','slug' => ' بنش',],
            ['name' => ' معرة مصرين','slug' => ' معرة-مصرين',],
            ['name' => ' الفوعة','slug' => ' الفوعة',],
            ['name' => ' باتبو','slug' => ' باتبو',],
            ['name' => ' حزانو','slug' => ' حزانو',],            
            ['name' => ' حارم','slug' => ' حارم',],            
            ['name' => ' سلقين','slug' => ' سلقين',],            
            ['name' => ' كفر تخاريم','slug' => ' كفر-تخاريم',],            
            ['name' => ' تفتناز','slug' => 'تفتناز',],            
            ['name' => ' سرمدا','slug' => ' سرمدا',],            
            ['name' => ' الدانا','slug' => ' الدانا',],            
            ['name' => ' ترمانين','slug' => ' ترمانين',],            
            ['name' => ' اطمة','slug' => ' اطمة',],            
            ['name' => ' قاح','slug' => ' قاح',],
            ['name' => ' الاتارب','slug' => ' الاتارب',],
            ['name' => ' تل الكرامة','slug' => ' تل-الكرامة',],
            ['name' => ' كفر كرمين','slug' => ' كفر-كرمين',],
        ]);
    }
}
