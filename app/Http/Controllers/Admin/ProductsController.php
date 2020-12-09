<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Str;
use App\Models\Brands;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Collection;
class ProductsController extends Controller
{
    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $products = Product::with('sub_categories')->Selection()->get();
        // return $products;

        return view('admin.products.index', compact('products'));
    }    
    /**
     * products_info
     *
     * @return void
     */
    public function products_info()
    {
        $products = Product::with(['product_info','product_price','images'])->Selection()->get();
        // return $products;
            return view('admin.products.products_info', compact('products'));
    }        
    /**
     * products_attribut
     *
     * @return void
     */
    public function products_attribut()
    {
        $products = Product::with(['product_attribut'])->select('id')->get();
        return view('admin.products.products_attribut', compact('products'));
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $data = [];
        $data['categories'] = MainCategory::active()->select('id','name')->get();
        $data['sub_categories'] = SubCategory::active()->select('id','name')->get();
        $data['brands'] = Brands::active()->select('id','name')->get();
        $data['tags'] = Tag::select('id','name')->get();
        $data['vendors'] = Vendor::active()->select('id','name')->get();
        $data['users'] = User::active()->select('id','name')->get();
        $data['locations'] = Location::active()->select('id','name')->orderBy('name', 'ASC')->get();

        return view('admin.products.create', $data);
    }

    public function store(ProductRequest $request)
    {
        // return $request->all();
        // try {

            DB::beginTransaction();

            //validation

            // to get defult lang
            $products = collect($request->product);
            $filter = $products->filter(function ($value, $key) {
                return $value['abbr'] == get_default_lang();
            });
            // veranderen van object naar array
            $default_product = array_values($filter->all()) [0];


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);


            $filePath = "";
            if ($request->has('photo')) {

                $filePath = uploadImage('products', $request->photo);

            }
            // category_id
            if($request->category_id != 0 ){
                $category_id = $request->category_id;
            }else{
                $category_id = Null;
            }
            // sub_category_id
            if($request->sub_category_id != 0 ){
                $sub_category_id = $request->sub_category_id;
            }else{
                $sub_category_id = Null;
            }
            // vendor_id
            if($request->vendor_id != 0 ){
                $vendor_id = $request->vendor_id;
            }else{
                $vendor_id = Null;
            }
            // brand_id 
            if($request->brand_id  != 0 ){
                $brand_id  = $request->brand_id ;
            }else{
                $brand_id  = Null;
            }

            $product = Product::create([
                'translation_lang' => $default_product['abbr'],
                'translation_of' => 0,
                'user_id' => $request->user_id,
                'category_id' => $category_id,
                'sub_category_id' => $sub_category_id,
                'vendor_id' => $vendor_id,
                'brand_id ' => $brand_id ,
                'active' => $request->active,
            ]);

            // save product_info
            $product->product_info()->create([
                'name' => $request->name,
                'slug' => $request->slug,
                'description' => $request->description,
                'location_id' => $request->location_id,
            ]);
            // save product_price
            $product->product_price()->create([
               'type_price' => $request->type_price,
               'price' =>$request->price,
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
            // save product images
            $product->images()->create([
                'photo' => $filePath
            ]);

            //save product tags
            $product->tags()->attach($request->tags);
            
            DB::commit();
            return redirect()->route('admin.products')->with(['success' => 'تم ألاضافة بنجاح']);


        // } catch (\Exception $ex) {
        //     // return $ex;
        //     DB::rollback();
        //     return redirect()->route('admin.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        // }

    }



 

    public function edit($id)
    {
        $products = Product::find($id);

        $data = [];
        $data['products'] = Product::find($id);
        $data['brands'] = Brands::active()->select('id','name')->get();
        $data['tags'] = Tag::select('id','name')->get();
        $data['categories'] = MainCategory::active()->select('id','name')->get();
        $data['vendors'] = Vendor::active()->select('id','name')->get();


        if (!$products)
            return redirect()->route('admin.products')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.products.edit',$data
            );

    }


    public function update($id, ProductRequest $request)
    {
        try {

            $products = Product::find($id);
            if (!$products)
                return redirect()->route('admin.subcategories')->with(['error' => 'هذا القسم غير موجود']);


                // save image
                if ($request->has('photo')) {
                    $filePath = uploadImage('products', $request->photo);
                    Product::where('id', $Sub_id)
                        ->update([
                            'photo' => $filePath,
                        ]);
                }
                $product = Product::where('id', $id)->update([

                    'name' => $request->name,
                    'slug' => $request->slug,
                    'price' => $request->price,
                    'description' => $request->description,
                    'brand_id' => $request->brand_id,
                    'category_id' => $request->category_id,
                    'vendor_id' => $request->vendor_id,
                    'active' => $request->active,
                ]);


        
            //save product tags
            // $product = tags()->sync($request->tags);
            

            return redirect()->route('admin.products')->with(['success' => 'تم ألاضافة بنجاح']);


        } catch (\Exception $ex) {
            return $ex;
            DB::rollback();
            return redirect()->route('admin.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function destroy($id)
    {

        try {
            $products= Product::find($id);
            if (!$products)
                return redirect()->route('admin.products')->with(['error' => 'هذا القسم غير موجود ']);


            ## Delet image
            ##Srt is cutting helper method
            $image = Str::after($products->photo, 'assets/');
            $image = public_path('assets/' . $image);
            unlink($image); //delete from folder

            #Delet all translation of the categories
            $products -> products() -> delete();
        
            #delet section
            $products->delete();

            return redirect()->route('admin.products')->with(['success' => 'تم حذف القسم بنجاح']);

        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('admin.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
    public function changeStatus($id)
    {
        try {
            $products = Product::find($id);
            if (!$products)
                return redirect()->route('admin.products')->with(['error' => 'هذا القسم غير موجود ']);

           $status =  $products -> active  == 0 ? 1 : 0;

           $products -> update(['active' =>$status ]);

            return redirect()->route('admin.products')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
