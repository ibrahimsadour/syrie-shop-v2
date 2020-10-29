<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home_page (){
        return view('front.home');
    }
    public function contact_us (){
        return view('front.pages.contact-us');
    }
    public function about_us (){
        return view('front.pages.about-us');
    }
    public function store (){
        return view('front.pages.store');
    }
    public function faqs (){
        return view('front.pages.faqs');
    }
    public function coming_soon (){
        return view('front.pages.coming-soon');
    }
    public function page_404 (){
        return view('front.pages.404-page');
    }
    public function become_a_vendor (){
        return view('front.pages.become-a-vendor');
    }
    public function my_account (){
        return view('front.pages.auth.my-account');
    }
    public function wish_list (){
        return view('front.pages.wish-list');
    }
    public function lost_password (){
        return view('front.pages.auth.lost-password');
    }

}
