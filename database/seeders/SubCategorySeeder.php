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
                'photo' => 'images/subcategories/subcategoriesSeeder/motor.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>1,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' السيارات',
                'slug' => ' السيارات',
                'photo' => 'images/subcategories/subcategoriesSeeder/cars.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>1,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الشاحنات',
                'slug' => 'الشاحنات',
                'photo' => 'images/subcategories/subcategoriesSeeder/treuck.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>1,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الجرارات',
                'slug' => ' الجرارات',
                'photo' => 'images/subcategories/subcategoriesSeeder/tracktor.png',
                'active' => '1',
            ],
            [   
                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' سامسونج',
                'slug' => ' سامسونج',
                'photo' => 'images/subcategories/subcategoriesSeeder/samsung.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الايفون',
                'slug' => ' الايفون',
                'photo' => 'images/subcategories/subcategoriesSeeder/iphone.png',
                'active' => '1',
            ],            
            [
                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' التابلت',
                'slug' => 'التابلت',
                'photo' => 'images/subcategories/subcategoriesSeeder/tablet.png',
                'active' => '1',
            ],            
            [

                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' هواوي',
                'slug' => ' هواوي',
                'photo' => 'images/subcategories/subcategoriesSeeder/hawawi.png',
                'active' => '1',
            ],            
            [
                'parent_id'=>0, 
                'category_id'=>2,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => 'شاومي',
                'slug' => 'شاومي',
                'photo' => 'images/subcategories/subcategoriesSeeder/xoime.png',
                'active' => '1',
            ],            
            [
                'parent_id'=>0, 
                'category_id'=>13,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الرجال',
                'slug' => ' الرجال',
                'photo' => 'images/subcategories/subcategoriesSeeder/man.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>13,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => 'النساء ',
                'slug' => ' النساء',
                'photo' => 'images/subcategories/subcategoriesSeeder/women.png',
                'active' => '1',
            ],
            [
                'parent_id'=>0, 
                'category_id'=>13,
                'translation_lang' => 'ar',
                'translation_of' => '0',
                'name' => ' الأطفال',
                'slug' => ' الأطفال',
                'photo' => 'images/subcategories/subcategoriesSeeder/baby.png',
                'active' => '1',
            ],
            
        ]);
    }
}
