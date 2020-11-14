<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\WebsiteController;

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** 
*--------------------------------------------------------------------------
* Wbsite Routes
*--------------------------------------------------------------------------
*@todo this Route was made by Ibrahim sadour
*@todo Here is all route of the Front End Site
*/
Route::group( [
    'prefix' => '/'
],function() {

    /** Home Page route 
    * @todo URL:www.DomeinName.com
    * @todo Route name : site.index
    */
    Route::get('',[WebsiteController::class ,'home_page']) -> name('site.index');

    /** contact-us page
    * @todo URL:www.DomeinName.com/contact-us
    * @todo Route name : site.contact-us
    */
    Route::get('contact-us',[WebsiteController::class ,'contact_us']) -> name('site.contact-us');

    /** about-us page
    * @todo URL:www.DomeinName.com/about-us
    * @todo Route name : site.about-us
    */
    Route::get('about-us',[WebsiteController::class ,'about_us']) -> name('site.about-us');

    /** store page
    * @todo URL:www.DomeinName.com/store
    * @todo Route name : site.store
    */
    Route::get('store',[WebsiteController::class ,'store']) -> name('site.store');

    /** faqs page
    * @todo URL:www.DomeinName.com/faqs
    * @todo Route name : site.faqs
    */
    Route::get('faqs',[WebsiteController::class ,'faqs']) -> name('site.faqs');

    /** coming-soon page
    * @todo URL:www.DomeinName.com/coming-soon
    * @todo Route name : site.coming-soon
    */
    Route::get('coming-soon',[WebsiteController::class ,'coming_soon']) -> name('site.coming-soon');

    /** 404-page page
    * @todo URL:www.DomeinName.com/404-page
    * @todo Route name : site.404-page
    */
    Route::get('404-page',[WebsiteController::class ,'page_404']) -> name('site.404-page');

    /** become-a-vendor page
    * @todo URL:www.DomeinName.com/become-a-vendor
    * @todo Route name : site.become-a-vendor
    */
    Route::get('become-a-vendor',[WebsiteController::class ,'become_a_vendor']) -> name('site.become-a-vendor');


    /** lost-password page
    * @todo URL:www.DomeinName.com/my-account/lost-password
    * @todo Route name : site.lost-password
    */
    Route::get('my-account/lost-password',[WebsiteController::class ,'lost_password']) -> name('site.lost-password');

    /** wish-list page
    * @todo URL:www.DomeinName.com/wish-list
    * @todo Route name : site.wish-list
    */
    Route::get('wish-list',[WebsiteController::class ,'wish_list']) -> name('site.wish-list');


    ######################### Begin subCategory route ###############################
    /** add-advertisement
    * @todo URL:www.DomeinName.com/advertisement
    * @todo Route name : advertisement.index
    */
    Route::group(['prefix' => 'sub-category'], function() {

        Route::get('{id}', [WebsiteController::class, 'showSubCategory'])->name('site.showSubCategory');

    });
    ######################### End subCategory route ###############################
});




