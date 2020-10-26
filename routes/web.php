<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('front.home');
})->name('site.index');

// // contact-us
// Route::get('/contact-us', function () {
//     return view('front.pages.contact-us');
// })->name('site.contact-us.index');

// // about-us
// Route::get('/about-us', function () {
//     return view('front.pages.about-us');
// })->name('site.about-us.index');

// // store-listing
// Route::get('/store-listing', function () {
//     return view('front.pages.store-listing');
// })->name('site.store-listing.index');

// // store
// Route::get('/store', function () {
//     return view('front.pages.store');
// })->name('site.store.index');

// // faqs
// Route::get('/faqs', function () {
//     return view('front.pages.faqs');
// })->name('site.faqs.index');

// // coming-soon
// Route::get('/coming-soon', function () {
//     return view('front.pages.coming-soon');
// })->name('site.coming-soon.index');


// // become-a-vendor
// Route::get('/become-a-vendor', function () {
//     return view('front.pages.become-a-vendor');
// })->name('site.become-a-vendor.index');

// // my-account
// Route::get('/my-account', function () {
//     return view('front.pages.auth.my-account');
// })->name('site.my-account.index');

// // lost-password
// Route::get('/my-account/lost-password', function () {
//     return view('front.pages.auth.lost-password');
// })->name('site.lost-password.index');

// // our-press
// Route::get('/our-press', function () {
//     return view('front.pages.our-press');
// })->name('site.our-press.index');

// // wish-list
// Route::get('/wish-list', function () {
//     return view('front.pages.wish-list');
// })->name('site.wish-list.index');