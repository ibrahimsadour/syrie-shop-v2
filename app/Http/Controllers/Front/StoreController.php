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
        $products = Product::with(['categories','sub_categories','user','images','product_price','product_status','product_info','product_attribut'])->orderBy('id', 'desc')->Active()->paginate(PAGINATION_COUNT);
        return view('front.pages.store',compact('products'));
    }    
    /**
     * getProductCategory
     *
     * @param  mixed $id
     * @return void
     */
    public function getProductCategory ($id){
        $products = Product::with(['categories','sub_categories','user','images','product_price','product_status','product_info','product_attribut'])->where('category_id',$id)->orderBy('id', 'desc')->Active()->paginate(PAGINATION_COUNT);
        return view('front.pages.store',compact('products','products'));
    }    
    /**
     * getProductSubCategory
     *
     * @param  mixed $id
     * @return void
     */
    public function getProductSubCategory ($id){
        $products = Product::with(['categories','sub_categories','user','images','product_price','product_status','product_info','product_attribut'])->where('sub_category_id',$id)->orderBy('id', 'desc')->Active()->paginate(PAGINATION_COUNT);
        return view('front.pages.store',compact('products'));
    }
}
