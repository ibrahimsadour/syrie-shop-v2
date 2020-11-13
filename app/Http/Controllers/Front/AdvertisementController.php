<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\SubCategory;
class AdvertisementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application Advertisement
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // selection() deze methode is gemaakt in de Models 
        $default_lang = get_default_lang();
        $categories = MainCategory::where('translation_lang', $default_lang)
            ->Active()
            ->selection()
            ->get();
        return view('front.pages.advertisement.index',compact('categories'));

    }

    public function showSubCategory(Request $request)
    {
        $default_lang = get_default_lang();
        $categories = MainCategory::where('translation_lang', $default_lang)->where('id',$request->id)
            ->Active()
            ->get();
            // return $categories;
        $subCategories = SubCategory::where('category_id',$request->id) ->Active()->selection()->get();
        return view('front.pages.advertisement.subIndex',compact('subCategories','categories'));

    }
}
