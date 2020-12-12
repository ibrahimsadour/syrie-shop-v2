<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Product;

class StoreController extends Controller
{
    public function index (){

        $products = Product::with(['categories','sub_categories','user','images','product_price','product_status','product_info','product_attribut'])->paginate(PAGINATION_COUNT);
        // return $prudocts;
        return view('front.pages.store',compact('products'));
    }
}
