<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Product_price;
use App\Models\ProductImages;
use App\Models\Brands;
use App\Models\Tag;
use App\Models\Vendor;
use App\Models\Location;
use Illuminate\Support\Facades\Route;
use Session;
use Illuminate\Support\Str;
use App\Http\Requests\Front\ProductsRequest;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     * @todo يسمح لجميع الزوار روئية فقط الـ (index)
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * @todo Show the product with his information on the site 
     * @todo لأظهار المنتج او الاعلان مع كافة المعلومات الخاصة به
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
     *@todo Show the step One Form for creating a new product.
     *@todo الخطوة الاولى في انشاء الاعلان
     *@return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $default_lang = get_default_lang();
        // عرض كافة الاقسام الموجود بالموقع
        $categories = MainCategory::where('translation_lang', $default_lang)
            ->Active()
            ->selection()
            ->get();
        return view('front.pages.products.create-step-one',compact('categories'));
    }

    /**  
     * Post Request to store step1 info in session
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        // validatedData
        $validatedData = $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ],        
        [
            'name.required'=>'لم يتم إدخال  عنوان الاعلان ',
            'category_id.required'=>'أختر القسم المناسب لاعلانك ',
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
        $name= $request->name;
        return redirect()->route('products.create.step.two',['name'=>$name]);
    }
  
    /**
     * Show the step One Form for creating a new product.
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

        $sub_categories = SubCategory::where('translation_lang', $default_lang)->where('category_id', $category_id)
        ->Active()
        ->selection()
        ->get();
        $locations = Location::Active()->selection()->get();

        $product = $request->session()->get('product');
        return view('front.pages.products.create-step-two',compact('product','categories','sub_categories','locations'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        // validatedData
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'required|max:1000',
        ],
        [      
            'name.required'=>'لم يتم إدخال  عنوان الاعلان ',
            'price.required'=>'لم يتم إدخال سعر الاعلان  ',
            'price.integer'=>'يجب ان يكون السعر من ارقام  ',
            'description.required'=>'لم يتم إدخال الوصف الخاص بالاعلان  ',
        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);

        //send this to the second method // أرسال هذه القيمة الوظيفة التالية لاظهار اسم القسم المختار
        $category_id = $request->session()->get('product')->category_id;
        if($category_id){
            // categories
            $categories = MainCategory::find($category_id);
            $categories_name = $categories->name; 
            Session::put('categories_name', $categories_name);
        }

        // send price and type_price and kilometer to another function
        // price - type_price
        $name = $request->name;
        $description = $request->description;
        $location = $request->location_id;
        $price = $request->price;
        $type_price = $request->type_price;
        $kilometer = $request->kilometer;


        Session::put('location', $location);
        Session::put('kilometer', $kilometer);
        Session::put('price', $price);
        Session::put('type_price', $type_price);
        Session::put('name', $name);
        Session::put('description', $description);
        // return $request;
        $name= $request->name;
        $location= $request->location_id;
        $description= $request->description;
        return redirect()->route('products.create.step.three',['name'=>$name,'description'=>$description,'location'=>$location]);
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {   
         $product = $request->session()->get('product');

        // recive this variabel from the method (postCreateStepTwo) استقبال القيم من وظيفة اخرى
        $categories_name = Session::get('categories_name');
        $kilometer = Session::get('kilometer');
        $filename = Session::get('product_filename');
        $type_price = Session::get('type_price');
        $price = Session::get('price');
        $name = Session::get('name');
        $description = Session::get('description');
        $location = Session::get('location');
        
        //  to get the name from the location id.
        $locations_name= Location::where('id',$location)->get();
        foreach($locations_name as $location_name){
            $location_name = $location_name->name;
        }
        
        return view('front.pages.products.create-step-three',compact('product','kilometer','categories_name','filename','type_price','price','name','description','location_name'));
    }
  
 
    /**
     * saveProductImages
     * to save images to folder only
     * @param  mixed $request
     * @return void
     */
    public function saveProductImages(Request $request){

        // save image in folder
        $file = $request->file('file');
        $filename = uploadImage('products', $file);
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


        try {
            // products slug ( ' ' ) => ( '-' )
            $product_name = $request->session()->get('product')->name;
            $product_description = $request->session()->get('product')->description;
            $product_price =  $request->session()->get('product')->price;
            $product_slug = str_replace(' ', '-', $product_name); 
            // product_id
            $category_id = $request->session()->get('product')->category_id;

            $product = $request->session()->get('product');

            $product  = Product::create([
                'translation_lang' =>"ar",
                'translation_of' =>"0",
                'user_id' => Auth::id(),
                'category_id' =>$category_id,
                'brand_id' =>  Null,
                'vendor_id' => Null,
            ]);
            // save product_info
            $name = Session::get('name');
            $description = Session::get('description');
            $location = Session::get('location');
            $product->product_info()->create([
                'name' => $name,
                'slug' => $name,
                'description' => $description,
                'location_id' => $location,
            ]);

            // save product_price
            $price = Session::get('price');
            $type_price = Session::get('type_price');
            $product->product_price()->create([
               'type_price' => $type_price,
               'price' =>$price,
            ]);

            // save product_status
            $product->product_status()->create([
            'viewed' =>1,
            'sales_status' =>1,
            ]);
            // save product_attributs
            $product->product_attribut()->create([
                'kilometers' => $request->kilometers,
                'age' => $request->age,
                'color' => $request->color,
                'size' => $request->size,
            ]);
            // last insert id of this product
            $LastInsertId = $product->id;
            $filename = Session::get('product_filename');

            // save image to database
            if($filename){
                foreach ($filename as $image){
                    $slice = Str::between($image, '"', '"');
                    $remove_slash=  Str::replaceArray('\/', ['/'], $slice);
                    $photo=  Str::replaceArray('\/', ['/'], $remove_slash);
                    // return $photo;
                    ProductImages::create([
                        'product_id' => $LastInsertId,
                        'photo' => $photo,
                    ]);
                }
            }
            // to remove the seacion
            $request->session()->forget('product_filename');
            $request->session()->forget('product');

            return redirect()->route('user.myProducts')->with("success"," تم إضافة الاعلان بنجاح!");
        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('site.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
    
    /**
     * fileDestroy
     * remobve images
     * @param  mixed $request
     * @return void
     */
    public function imageDestroy(Request $request)
    {
  
        $filsename = Session::get('product_filename');
        $product_filename = collect($filsename );
        foreach($filsename as $filename){
            $slice = Str::between($filename, '"', '"');
            $remove_slash=  Str::replaceArray('\/', ['/'], $slice);
            $photo=  Str::replaceArray('\/', ['/'], $remove_slash);
            $image = public_path('assets'.'/' . $photo);
            if (file_exists($image)) {
                unlink  ($image);
                return response()->json($image, 200);
    
            }
        }
        $request->session()->forget($filename);


    }
    

    /**
     * Show the user products
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getUserProducts()
    {
        try {
            $user = auth()->user();
            $user_id = $user->id;
            $products = Product::where('user_id', '=', $user_id )->with(['product_price','images','product_info'])
                ->Active()
                ->selection()
                ->paginate(PAGINATION_COUNT);
        
                // return$products;
            return view('front.pages.products.my-products.index',compact('products'));

        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('site.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
    /**
     * edit
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
        try {
            $products = Product::find($id);

            $data = [];
            $data['products'] = Product::find($id);
            $data['brands'] = Brands::active()->select('id','name')->get();
            $data['tags'] = Tag::select('id','name')->get();
            $data['categories'] = MainCategory::active()->select('id','name')->get();
            $data['vendors'] = Vendor::active()->select('id','name')->get();

            // return $data['products']->product_price->price;

            if (!$products){
                return redirect()->route('user.myProducts')->with(['error' => 'هذا القسم غير موجود ']);
            }

            return view('front.pages.products.my-products.edit',$data);
        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
    
    /**
     * destroy
     * to remove product with his image and his info
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {

        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('user.myProducts')->with(['error' => 'هذا الاعلان غير موجود ']);

            ## Delet image
            ##Srt is cutting helper method
            $product_images= $product->images;
            foreach($product_images as $product_image ){
                $image = Str::after($product_image['photo'], 'assets/');
                $image = public_path('assets/' . $image);
                unlink($image); //delete from folder
            }

            #Delet all info of the product
            $product -> product_price()-> delete();
            $product -> product_info()-> delete();
            $product -> product_status()-> delete();
            $product -> product_attribut()-> delete();
            $product -> images()-> delete();
            $product -> delete();
        
          
            return redirect()->route('user.myProducts')->with(['success' => 'تم حذف الاعلان بنجاح']);

        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('user.myProducts')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}
