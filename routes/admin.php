<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguagesController;
use App\Http\Controllers\Admin\MainCategoriesController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\VendorsController;
use App\Http\Controllers\Admin\SubCategoriesController;
use App\Http\Controllers\Admin\ProductsController;
Auth::routes(['verify' =>true]);
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Dzee Route is gemaakt door Ibrahim sadour 06-10-2020
// Er wordt een namespace gemaakt ook in de bestaand /RouteServiceProvider/
// Hier wordt alle admin (Routes) toegevoegd.
// wordt hier in de bestand  /RouteServiceProvider/ een apart prefix ('admin') gemaakt  

//moet de gebruiker ingelogd ben om deze route te berieken
Route::group(['namespace'=>'Admin','middleware' => 'auth:admin'], function() {

    Route::get('/dashboard', [DashboardController::class ,'index']) -> name('admin.dashboard');

    ############################# Begin Languages Route ###############################
    Route::group(['prefix' => 'languages'], function () {
        
        Route::get('/', [LanguagesController::class ,'index'])->name('admin.languages');
        Route::get('create', [LanguagesController::class ,'create'])->name('admin.languages.create');
        Route::post('store', [LanguagesController::class ,'store'])->name('admin.languages.store');
        Route::get('edit/{id}',[LanguagesController::class ,'edit']) -> name('admin.languages.edit');
        Route::post('update/{id}',[LanguagesController::class ,'update']) -> name('admin.languages.update');
        Route::get('delete/{id}',[LanguagesController::class ,'destroy']) -> name('admin.languages.delete');
        //change Status the Languages 
        Route::get('changeStatus/{id}',[LanguagesController::class ,'changeStatus']) -> name('admin.languages.status');
    });
    ############################# End Languages Route ###############################



    ######################### Begin Main Categoris Routes ########################
    Route::group(['prefix' => 'main_categories'], function () {

        Route::get('/', [MainCategoriesController::class ,'index']) -> name('admin.maincategories');
        Route::get('create',[MainCategoriesController::class ,'create']) -> name('admin.maincategories.create');
        Route::post('store',[MainCategoriesController::class ,'store']) -> name('admin.maincategories.store');
        Route::get('edit/{id}',[MainCategoriesController::class ,'edit']) -> name('admin.maincategories.edit');
        Route::post('update/{id}',[MainCategoriesController::class ,'update']) -> name('admin.maincategories.update');
        Route::get('delete/{id}',[MainCategoriesController::class ,'destroy']) -> name('admin.maincategories.delete');
        //change Status the category and the vendors 
        Route::get('changeStatus/{id}',[MainCategoriesController::class ,'changeStatus']) -> name('admin.maincategories.status');
    });
    ######################### End  Main Categoris Routes  ########################


    
    ######################### Begin Sub Categoris Routes ########################
    Route::group(['prefix' => 'sub_categories'], function () {
        Route::get('/',[SubCategoriesController::class ,'index']) -> name('admin.subcategories');
        Route::get('create',[SubCategoriesController::class ,'create']) -> name('admin.subcategories.create');
        Route::post('store',[SubCategoriesController::class ,'store']) -> name('admin.subcategories.store');
        Route::get('edit/{id}',[SubCategoriesController::class ,'edit']) -> name('admin.subcategories.edit');
        Route::post('update/{id}',[SubCategoriesController::class ,'update']) -> name('admin.subcategories.update');
        Route::get('delete/{id}',[SubCategoriesController::class ,'destroy']) -> name('admin.subcategories.delete');
        //change Status the sub category 
        Route::get('changeStatus/{id}',[SubCategoriesController::class ,'changeStatus']) -> name('admin.subcategories.status');

    });
    ######################### End  Sub Categoris Routes  ########################


    ######################### Begin  Tags Routes ########################
    Route::group(['prefix' => 'tags'], function () {

        Route::get('/', [TagsController::class ,'index']) -> name('admin.tags');
        Route::get('create',[TagsController::class ,'create']) -> name('admin.tags.create');
        Route::post('store',[TagsController::class ,'insert']) -> name('admin.tags.store');
        // Route::post('store', function () {
        //     return'fff';
        // })-> name('admin.tags.store');
        Route::get('edit/{id}',[TagsController::class ,'edit']) -> name('admin.tags.edit');
        Route::post('update/{id}',[TagsController::class ,'update']) -> name('admin.tags.update');
        Route::get('delete/{id}',[TagsController::class ,'destroy']) -> name('admin.tags.delete');
        //change Status the tags 
        Route::get('changeStatus/{id}',[TagsController::class ,'changeStatus']) -> name('admin.tags.status');
    });
    ######################### End   BraTagsnds Routes  ########################


    ######################### Begin  Brands Routes ########################
    Route::group(['prefix' => 'brands'], function () {

        Route::get('/', [BrandsController::class ,'index']) -> name('admin.brands');
        Route::get('create',[BrandsController::class ,'create']) -> name('admin.brands.create');
        Route::post('store',[BrandsController::class ,'store']) -> name('admin.brands.store');
        Route::get('edit/{id}',[BrandsController::class ,'edit']) -> name('admin.brands.edit');
        Route::post('update/{id}',[BrandsController::class ,'update']) -> name('admin.brands.update');
        Route::get('delete/{id}',[BrandsController::class ,'destroy']) -> name('admin.brands.delete');
        //change Status the brands 
        Route::get('changeStatus/{id}',[BrandsController::class ,'changeStatus']) -> name('admin.brands.status');
    });
    ######################### End   Brands Routes  ########################


    ######################### Begin vendors Routes ###############################
    Route::group(['prefix' => 'vendors'], function () {
        
        Route::get('/',[VendorsController::class ,'index']) -> name('admin.vendors');
        Route::get('create',[VendorsController::class ,'create']) -> name('admin.vendors.create');
        Route::post('store',[VendorsController::class ,'store']) -> name('admin.vendors.store');
        Route::get('edit/{id}',[VendorsController::class ,'edit']) -> name('admin.vendors.edit');
        Route::post('update/{id}',[VendorsController::class ,'update']) -> name('admin.vendors.update');
        Route::get('delete/{id}',[VendorsController::class ,'destory']) -> name('admin.vendors.delete');
        //change Status the vendors 
        Route::get('changeStatus/{id}',[VendorsController::class ,'changeStatus']) -> name('admin.vendors.status');

    });
    ######################### End  vendors Routes  ################################

    ######################### Begin Products Routes ########################
    Route::group(['prefix' => 'products'], function () {

        Route::get('/', [ProductsController::class ,'index']) -> name('admin.products');
        Route::get('create',[ProductsController::class ,'create']) -> name('admin.products.create');
        Route::post('store',[ProductsController::class ,'store']) -> name('admin.products.store');
        Route::get('edit/{id}',[ProductsController::class ,'edit']) -> name('admin.products.edit');
        Route::post('update/{id}',[ProductsController::class ,'update']) -> name('admin.products.update');
        Route::get('delete/{id}',[ProductsController::class ,'destroy']) -> name('admin.products.delete');
        //change Status the category and the vendors 
        Route::get('changeStatus/{id}',[ProductsController::class ,'changeStatus']) -> name('admin.products.status');
    });
    ######################### End  Main Categoris Routes  ########################

    // this route is allowd just for logined user or admin
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');


});

Route::group(['namespace'=>'Admin','middleware' => 'guest:admin'], function(){
    Route::get('login' ,[LoginController::class ,'getLogin'])-> name('get.admin.login');
    Route::post('login' ,[LoginController::class ,'login']) -> name('admin.login');
});


