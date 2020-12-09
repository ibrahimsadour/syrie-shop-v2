<?php

namespace Database\Seeders;

use App\Models\MainCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' المركبات',
                'slug' => ' المركبات',
                'photo' => 'images/maincategories/MainCategorySeeder/vehicles.png',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الموبايلات & الاكسسورات',
                'slug' => ' الموبايلات-الاكسسورات',
                'photo' => 'images/maincategories/MainCategorySeeder/Mobile-Phone-Accessories.png',
                'active' => '1',
            ],            
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' المولدات الكهربائية',
                'slug' => ' المولدات-الكهربائية',
                'photo' => 'images/maincategories/MainCategorySeeder/generators.png',
                'active' => '1',
            ],            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' العقارات',
                'slug' => ' العقارات',
                'photo' => 'images/maincategories/MainCategorySeeder/Real estate.png',
                'active' => '1',
            ],            
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' أجهزة كهربائية',
                'slug' => ' أجهزة-كهربائية',
                'photo' => 'images/maincategories/MainCategorySeeder/Home-and-kitchen.png',
                'active' => '1',
            ],            
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' المطاعم',
                'slug' => ' المطاعم',
                'photo' => 'images/maincategories/MainCategorySeeder/meals.png',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' أثاث ومفروشات',
                'slug' => ' أثاث-ومفروشات',
                'photo' => 'images/maincategories/MainCategorySeeder/furniture.png',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' مستلزمات الأطفال',
                'slug' => ' مستلزمات-الأطفال',
                'photo' => 'images/maincategories/MainCategorySeeder/Baby essentials.png',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الصحة & الجمال',
                'slug' => ' الصحة-الجمال',
                'photo' => 'images/maincategories/MainCategorySeeder/health-products.png',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' المجوهرات & الساعات',
                'slug' => ' المجوهرات-الساعات',
                'photo' => 'images/maincategories/MainCategorySeeder/Jewelry & watches.jpg',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' وظائف ومهن',
                'slug' => ' وظائف-ومهن',
                'photo' => 'images/maincategories/MainCategorySeeder/Jobs and careers.png',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' أجهزة الكمبيوتر',
                'slug' => ' أجهزة-الكمبيوتر',
                'photo' => 'images/maincategories/MainCategorySeeder/computer.jpg',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الملابس',
                'slug' => ' الملابس',
                'photo' => 'images/maincategories/MainCategorySeeder/Clothes.jpg',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' شركات ومحلات تجارية',
                'slug' => ' شركات-ومحلات-تجارية',
                'photo' => 'images/maincategories/MainCategorySeeder/Companies.png',
                'active' => '1',
            ],            
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' أقسام أخرى',
                'slug' => ' أقسام-أخرى',
                'photo' => 'images/maincategories/MainCategorySeeder/Other sections.png',
                'active' => '1',
            ],
            [
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' قريبا',
                'slug' => ' قريبا',
                'photo' => 'images/maincategories/MainCategorySeeder/coming soon.png',
                'active' => '1',
            ],
            
        ]);
    }
}
