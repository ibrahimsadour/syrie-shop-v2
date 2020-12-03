<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            [
                'parent_id'=>0, 
                'category_id'=>1,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الميتورات',
                'slug' => ' الميتورات',
                'photo' => ' images/maincategories/MainCategorySeeder/meals.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>1,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' السيارات',
                'slug' => ' السيارات',
                'photo' => ' images/maincategories/MainCategorySeeder/furniture.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>1,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الشاحنات',
                'slug' => 'الشاحنات',
                'photo' => ' images/maincategories/MainCategorySeeder/Baby essentials.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>1,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الجرارات',
                'slug' => ' الجرارات',
                'photo' => ' images/maincategories/MainCategorySeeder/health-products.png',
                'active' => '1',
            ],
            [   
                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' سامسونج',
                'slug' => ' سامسونج',
                'photo' => ' images/maincategories/MainCategorySeeder/vehicles.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الايفون',
                'slug' => ' الايفون',
                'photo' => ' images/maincategories/MainCategorySeeder/Mobile-Phone-Accessories.png',
                'active' => '1',
            ],            
            [
                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' التابلت',
                'slug' => 'التابلت',
                'photo' => ' images/maincategories/MainCategorySeeder/generators.png',
                'active' => '1',
            ],            
            [

                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' هواوي',
                'slug' => ' هواوي',
                'photo' => ' images/maincategories/MainCategorySeeder/Real estate.png',
                'active' => '1',
            ],            
            [
                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => 'شاومي',
                'slug' => 'شاومي',
                'photo' => ' images/maincategories/MainCategorySeeder/Home-and-kitchen.png',
                'active' => '1',
            ],            
            [
                'parent_id'=>0, 
                'category_id'=>0,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الرجال',
                'slug' => ' الرجال',
                'photo' => ' images/maincategories/MainCategorySeeder/Jobs and careers.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>0,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => 'النساء ',
                'slug' => ' النساء',
                'photo' => ' images/maincategories/MainCategorySeeder/3.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>0,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الأطفال',
                'slug' => ' الأطفال',
                'photo' => ' images/maincategories/MainCategorySeeder/Clothes.png',
                'active' => '1',
            ],
            
        ]);
    }
}
