<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Kilometer_vehicle;
use App\Models\Image;
use Illuminate\Support\Facades\Route;
use Session;
use Illuminate\Support\Str;
class ProductsController extends Controller
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
     * Show the application products
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
        return view('front.pages.products.index',compact('categories'));

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

        $default_lang = get_default_lang();
        $sub_categories = SubCategory::where('translation_lang', $default_lang)
        ->Active()
        ->selection()
        ->get();
        $product = $request->session()->get('product');
  
        return view('front.pages.products.create-step-one',compact('product','categories','sub_categories'));
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
        // $Kilometer_vehicle = Kilometer_vehicle::where('category_id', 2)
        // ->Active()
        // ->selection()
        // ->get();
        $product = $request->session()->get('product');
        // return $sub_categories;
        return view('front.pages.products.create-step-two',compact('product','categories','sub_categories'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);


        $category_id = $request->session()->get('product')->category_id;
        if($category_id){
        // categories
        $categories = MainCategory::find($category_id);
        $categories_name = $categories->name; 
        Session::put('categories_name', $categories_name);
        }

        // kilometer
        $kilometer = $request->kilometer;
        Session::put('kilometer', $kilometer);


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

        // sub_categories_name
        $categories_name = Session::get('categories_name');
        // kilometer
        $kilometer = Session::get('kilometer');
        
        $filename = Session::get('product_filename');


        return view('front.pages.products.create-step-three',compact('product','kilometer','categories_name','filename'));
    }
  

    //to save images to folder only
    public function saveProductImages(Request $request){

        // save image in folder
        $file = $request->file('file');
        $filename = uploadImage('products', $file);
        // save image in database
        $product_filename = collect($filename );

        Session::push('product_filename', $product_filename);

        return response()->json(['success'=>$filename]);
    }
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request )
    {


        // products slug ( ' ' ) => ( '-' )
        $product_name = $request->session()->get('product')->name;
        $product_description = $request->session()->get('product')->description;
        $product_price = $request->session()->get('product')->price;
        $product_slug = str_replace(' ', '-', $product_name); 

        // product_id
        $category_id = $request->session()->get('product')->category_id;

        $product = $request->session()->get('product');

        // new product
        $product = new Product;
        $product ->translation_lang ="ar";
        $product ->translation_of ="0";
        $product ->category_id =$category_id;;
        $product ->brand_id =0;
        $product ->vendor_id =0;
        $product ->name =$product_name;
        $product ->slug =$product_slug;
        $product ->description =$product_description;
        $product ->price =$product_price;
        $product->save();

        // last insert id of this product
        $LastInsertId = $product->id;
        $filename = Session::get('product_filename');

        // save image to database
        if($filename){
            foreach ($filename as $image){
                Image::create([
                    'product_id' => $LastInsertId,
                    'photo' => $image,
                ]);
            }
        }

        $request->session()->forget('product');

        return redirect()->route('products.create.step.one');
    }

  



}