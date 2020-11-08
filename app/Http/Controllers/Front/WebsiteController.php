<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;

class WebsiteController extends Controller
{
        
    /**
     * home_page
     *
     * @return void
     */
    public function home_page (){

        // selection() deze methode is gemaakt in de Models 
        $default_lang = get_default_lang();
        $categories = MainCategory::where('translation_lang', $default_lang)
            ->Active()
            ->selection()
            ->get();

        return view('front.home', compact('categories'));
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
    public function wish_list (){
        return view('front.pages.wish-list');
    }
    public function lost_password (){
        return view('front.pages.auth.lost-password');
    }

}
