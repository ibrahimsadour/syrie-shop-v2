<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Product;
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
      
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $default_lang = get_default_lang();
        $categories = MainCategory::where('translation_lang', $default_lang)
            ->Active()
            ->selection()
            ->get();

        $product = $request->session()->get('product');
  
        return view('front.pages.advertisement.create-step-one',compact('product','categories'));
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        // validatedData
        $validatedData = $request->validate([
            'name' => 'required|unique:products',
            'category_id' => 'required'
        ]);

        if(empty($request->session()->get('product'))){
            $product = new Product();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }
  
        return redirect()->route('products.create.step.two');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        // all categories
        $category_id = $request->session()->get('product')->category_id;
        $default_lang = get_default_lang();
        $categories = MainCategory::where('translation_lang', $default_lang)->where('id', $category_id)
        ->Active()
        ->selection()
        ->get();
        $default_lang = get_default_lang();
        $sub_categories = SubCategory::where('translation_lang', $default_lang)->where('category_id', $category_id)
        ->Active()
        ->selection()
        ->get();
        $product = $request->session()->get('product');

        // return $sub_categories;
        return view('front.pages.advertisement.create-step-two',compact('product','categories','sub_categories'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'price' => 'required',
        ]);
  
        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);
  
        return redirect()->route('products.create.step.three');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $product = $request->session()->get('product');
  
        return view('front.pages.advertisement.create-step-three',compact('product'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
        $product = $request->session()->get('product');
        $product->save();
  
        $request->session()->forget('product');
  
        return redirect()->route('products.index');
    }


}
