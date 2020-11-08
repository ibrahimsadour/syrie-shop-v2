<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\WebsiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Front\DashboardController;
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

});

Route::post('/login-attempt', [LoginController::class, 'loginAttempt'])->name('login-attempt');

/** my-account page
* @todo URL:www.DomeinName.com/my-account
* @todo Route name : site.my-account
*/
Route::get('my-account',[LoginController::class ,'my_account']) -> name('site.my-account');