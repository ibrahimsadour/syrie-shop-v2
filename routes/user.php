<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\WebsiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Front\DashboardController;
use App\Http\Controllers\Front\ProductsController;

Auth::routes();


/** 
*--------------------------------------------------------------------------
* User Routes
*--------------------------------------------------------------------------
*@todo this Route was made by Ibrahim sadour
*@todo Here is all route of the Front End Site
*/
Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('user.logout');


    ######################### Begin advertisement route ###############################
    /** add-advertisement
    * @todo URL:www.DomeinName.com/advertisement
    * @todo Route name : advertisement.index
    */
    Route::group(['prefix' => 'products'], function() {

        Route::get('/create-step-one', [ProductsController::class, 'createStepOne'])->name('products.create.step.one');
        Route::post('/create-step-one', [ProductsController::class, 'postCreateStepOne'])->name('products.create.step.one.post');
        

        Route::get('/create-step-two', [ProductsController::class, 'createStepTwo'])->name('products.create.step.two');
        Route::post('/create-step-two', [ProductsController::class, 'postCreateStepTwo'])->name('products.create.step.two.post');
        
        Route::get('/create-step-three', [ProductsController::class, 'createStepThree'])->name('products.create.step.three');
        Route::post('/create-step-three', [ProductsController::class, 'postCreateStepThree'])->name('products.create.step.three.post');

        Route::post('images', [ProductsController::class,'saveProductImages'])->name('admin.products.images.store');
        Route::post('images/db', [ProductsController::class,'saveProductImagesDB'])->name('admin.products.images.store.db');

    });
    ######################### End advertisement route ###############################


});


/** login-attempt
* @todo URL:www.DomeinName.com/login-attempt
* @todo Route name : login-attempt
*/
Route::post('/login-attempt', [LoginController::class, 'loginAttempt'])->name('login-attempt');

/** my-account page
* @todo URL:www.DomeinName.com/my-account
* @todo Route name : site.my-account
* @todo this route for the login en regestir page.
*/
Route::get('my-account',[LoginController::class ,'my_account']) -> name('site.my-account');

/** Login with facebook or google or twitter
* @todo URL:www.DomeinName.com/login/{google}
* @todo Route name : 
* @todo login with socialite
*/
Route::get('/login-attempt/{provider}',[LoginController::class,'redirectToProvider'])->where('provider','twitter|facebook|linkedin|google|github|instagram');
Route::get('/login-attempt/callback/{provider}',[LoginController::class,'handleProviderCallback'])->where('provider','twitter|facebook|linkedin|google|github|instagram');